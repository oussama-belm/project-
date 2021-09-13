<?php

namespace App\Models;



use App\Models\produit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendeur extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'nom',
        'prenom',
        'num_telephone',
        'num_boutique',
        'typearticle',
    ];


    /**
     * Get all of the comments for the vendeur
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

     public function produits(){
        return $this->hasMany(produit::class);
     }


}
