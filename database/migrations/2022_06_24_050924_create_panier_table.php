<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up()
    {
        Schema::create('paniers', function (Blueprint $table) {
            $table->id('prod_id');
            $table->foreign('prod_id')->references('id')->on('produits')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('quantite');
        });
    }

    public function down()
    {
        Schema::dropIfExists('panier');
    }
};
