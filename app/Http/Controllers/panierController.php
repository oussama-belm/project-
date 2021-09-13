<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\panier;
use App\Models\panier_produit;
use Illuminate\Support\Facades\DB;

class panierController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function show($id){

        $prixTotal = 0;
        $panier = panier::findOrFail($id);
        $panier_product = DB::table('panier_produit')->where('panier_id',$id)->get();
        foreach ($panier->produits as $prod) {
            $prixTotal = $prixTotal + $prod['prix'];
        }

        return view('panier',[
            'panier' => $panier,
            'prixtotal'=>$prixTotal,
            'panier_produit'=>$panier_product,
        ]);

    }

    public function remove($id_panier,$id_produit){
        $pQte = DB::table('panier_produit')->where('panier_id',$id_panier)->where('produit_id',$id_produit)->get('Qte');
        $pqte = DB::table('produits')->where('id',$id_produit)->get('quantite');

        DB::table('produits')->where('id',$id_produit)->update(['quantite' => $pqte[0]->quantite + $pQte[0]->Qte]);

        //panier::findOrFail($id_panier)->produits[$id_produit-1]->delete();
        //dd(panier_produit::where('panier_id',$id_panier)->get());
        DB::table('panier_produit')->where('panier_id',$id_panier)->where('produit_id',$id_produit)->delete();
        return redirect('/panier/'.$id_panier);

    }

    public function pay(){
        return view('pay');
    }

    public function reload($id){
        DB::table('panier_produit')->where('panier_id',$id)->delete();
        return redirect('/panier/'.$id);
    }


    public function add_produit_a_panier($id_panier,$id_produit){

        $products = DB::table('panier_produit')->where('panier_id',$id_panier)->where('produit_id',$id_produit)->get();
        $Qte = request('count');

        if(count($products) > 0 ){
            $pQte = DB::table('panier_produit')->where('panier_id',$id_panier)->where('produit_id',$id_produit)->get('Qte');
            $pqte = DB::table('produits')->where('id',$id_produit)->get('quantite');
            DB::table('panier_produit')->where('panier_id',$id_panier)->where('produit_id',$id_produit)->update(['Qte' => $pQte[0]->Qte + $Qte]);
            DB::table('produits')->where('id',$id_produit)->update(['quantite' => $pqte[0]->quantite - $Qte]);

            return back();
        }else{

            DB::insert('insert into panier_produit (panier_id, produit_id,Qte) values (?, ?,?)', [$id_panier, $id_produit,$Qte]);
            $pqte = DB::table('produits')->where('id',$id_produit)->get('quantite');
            DB::table('produits')->where('id',$id_produit)->update(['quantite' => $pqte[0]->quantite - $Qte]);
            return back();
        }
    }
}
