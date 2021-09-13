<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class produitController extends Controller
{
    public function explor($id){
        $produit = DB::table('produits')->where('id',$id)->get();
        return view('product',[
            'product'=>$produit[0],
        ]);
    }
}
