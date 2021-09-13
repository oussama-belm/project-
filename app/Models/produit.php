<?php
namespace App\Http\Controllers;
use App\produit;
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\panier;





class produit extends Model
{
    use HasFactory;


    protected $guarded = [];

    protected $fillable = [
        'vendeur_id',
        'libele',
        'image',
        'prix',
        'quantite',
        'category',
        'description',
    ];

    public function vendeur(){
        return $this->belongsTo(vendeur::class);
    }

    public function paniers(){
        return $this->belongsToMany(panier::class);
    }
}
