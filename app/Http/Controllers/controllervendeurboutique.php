<?php

namespace App\Http\Controllers\Storage;
namespace App\Http\Controllers;

use GuzzleHttp\RedirectMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use App\Models\produit;
use App\Models\vendeur;
use Illuminate\Support\Facades\Storage;
use Psy\CodeCleaner\NamespacePass;


use function PHPUnit\Framework\isEmpty;

class controllervendeurboutique extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        return view('vendeur.vcreate');
    }


    public function login(){
        return view('vendeur.vlogin');
    }


    public function sended(){

        $data = request()->validate([
            'nom'=>['required','string','max:255'],
            'prenom'=>['required','string','max:255'],
            'num_telephone'=>['required','digits:10'],
            'num_boutique'=>['required','integer'],
            'typearticle'=>['required','string'],
        ]);
        \App\Models\dommander_compte_vendeur::create($data);
        return redirect('/home');
    }


    public function check(){
        $username = request('username');
        $password = request('password');

        $vendeur = DB::table('vendeurs')->where('username',$username)->where('password',$password)->get();

        if( count($vendeur) > 0 ){
            $vend = vendeur::find($vendeur[0]->id);
            return view('vendeur.profile',[
                'vendeur'=> $vend,
            ]);
        }else{
            return redirect('/vendeur/login');
        }

    }






    public function removeP($idu,$idp){
        $vendeur = DB::table('vendeurs')->where('id',$idu)->get();

        $vend = vendeur::find($vendeur[0]->id);

        DB::table('produits')->where('id',$idp)->delete();
        return view('vendeur.profile',[
            'vendeur'=> $vend,
        ]);
    }


    public function add_product($vid){
        $vendeur = DB::table('vendeurs')->where('id',$vid)->get();

        $vend = vendeur::find($vendeur[0]->id);

        $data = request()->validate([
            'libele'=>'required',
            'image'=>'required','image',
            'description'=>'required',
            'prix'=>'required',
            'quantite'=>'required',
        ]);
        $product = DB::table('produits')->get();
        $libele = request('libele');
        $desc = request('description');
        $arr = DB::table('produits')->where('libele',$libele)->where('vendeur_id',$vid)->where('description',$desc)->get();
        if(count($arr) > 0){
            return view('vendeur.profile',[
                'vendeur'=> $vend,
                'product'=> $product,
            ]);
        }

        $imagePath = request('image')->store('uploads','public');

        produit::create([
            'vendeur_id'=>$vid,
            'libele'=>request('libele'),
            'image'=>$imagePath,
            'description'=>request('description'),
            'prix'=>request('prix'),
            'quantite'=>request('quantite'),
            'category'=>request('Categories'),
        ]);
        return view('vendeur.profile',[
            'vendeur'=> $vend,
        ]);
    }
}
