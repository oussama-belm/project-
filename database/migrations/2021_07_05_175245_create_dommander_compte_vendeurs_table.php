<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDommanderCompteVendeursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dommander_compte_vendeurs', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nom');
            $table->string('prenom');
            $table->bigInteger('num_telephone');
            $table->integer('num_boutique');
            $table->string('typearticle');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dommander_compte_vendeurs');
    }
}
