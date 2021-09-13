<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendeursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendeurs', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('nom');
            $table->string('prenom');
            $table->bigInteger('num_telephone');
            $table->string('typearticle');
            $table->bigInteger('num_boutique');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendeurs');
    }
}
