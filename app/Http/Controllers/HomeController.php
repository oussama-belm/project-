<?php


namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;

//use App\Models\produit as Produit;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\produit;
use App\Models\vendeur;
use App\Models\panier;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$user = User::findOrFail(1);
        //dd($user->panier);
        //$prduct = produit::findOrFail(1);
        //$vendeur = vendeur::findOrFail(1);

        //dd($vendeur->produits);
        $product = DB::table('produits')->get();
        $evenement = DB::table('evenements')->get();
        $panier_id = Auth::user()->id;

        if(panier::find($panier_id)){

            return view('home',[
                'product'=>$product,
                'evens'=>$evenement,
            ]);
        }else{
            $product = DB::table('produits')->get();
            $panier = panier::create([
                'id'=> $panier_id,
                'user_id'=> $panier_id,
                'nbrproduit'=> 0,
            ]);

            $panier->save();
            return view('home',[
                'product' => $product,
                'evens'=>$evenement,
            ]);
        }

    }



    public function about(){
        return view('about');
    }
}
