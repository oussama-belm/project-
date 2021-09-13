<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\produit;
use App\Models\panier;


class panier_produit extends Model
{
    use HasFactory;

    public function paniers(){
        return $this->hasMany(panier::class);
    }

    public function produits(){
        return $this->hasMany(produit::class);
    }

}
