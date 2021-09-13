<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dommander_compte_vendeur extends Model
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
}
