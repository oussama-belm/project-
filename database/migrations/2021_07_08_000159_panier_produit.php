<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PanierProduit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panier_produit',function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('panier_id');
            $table->unsignedBigInteger('produit_id');
            $table->integer('Qte');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *$table->id();
            $table->unsignedBigInteger('panier_id');
            $table->unsignedBigInteger('produit_id');
            $table->timestamps();
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('panier_produit');
    }
}
