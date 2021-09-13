<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\panier_produit_contien;
use App\Models\produit;

class panier extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function produits(){
        return $this->belongsToMany(produit::class);
    }
}
