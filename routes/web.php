<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $evenement = DB::table('evenements')->get();
    $product = DB::table('produits')->get();


    return view('welcome',[
        'product'=>$product,
        'evens'=>$evenement,
    ]);
});

Auth::routes();



Route::get('/remove/{aid}/{uid}',[App\Http\Controllers\adminController::class,'refresh']);
Route::get('/panier/{id}/reload',[App\Http\Controllers\panierController::class,'reload']);
Route::get('/panier/{id}',[App\Http\Controllers\panierController::class,'show']);
Route::get('/pay',[App\Http\Controllers\panierController::class,'pay']);
Route::post('/addpanier/{id_panier}/{id_produit}',[\App\Http\Controllers\panierController::class,'add_produit_a_panier']);
Route::get('/removep/{id_panier}/{id_produit}',[\App\Http\Controllers\panierController::class,'remove']);
Route::post('/vlogin',[\App\Http\Controllers\controllervendeurboutique::class,'check']);
Route::get('/admin/login',[App\Http\Controllers\adminController::class,'login']);
Route::get('/vendeur/login',[App\Http\Controllers\controllervendeurboutique::class,'login']);
Route::get('/vendeur/create',[App\Http\Controllers\controllervendeurboutique::class,'create']);
Route::post('/sended',[App\Http\Controllers\controllervendeurboutique::class,'sended']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/delete/{id}',[App\Http\Controllers\adminController::class,'delete']);
Route::get('/vendeur/{idu}/{idp}',[App\Http\Controllers\controllervendeurboutique::class,'removeP']);
Route::post('/add/{vid}/p',[\App\Http\Controllers\controllervendeurboutique::class,'add_product']);
Route::get('/adlogin',[App\Http\Controllers\adminController::class,'adlogin']);
Route::get('accepter/{id}',[App\Http\Controllers\adminController::class,'accepter']);
Route::get('/product/{id}',[\App\Http\Controllers\produitController::class,'explor']);

Route::get('/about',[\App\Http\Controllers\HomeController::class,'about']);
Route::get('/Ajouter/evenement/{id}',[\App\Http\Controllers\adminController::class,'ajouter']);





