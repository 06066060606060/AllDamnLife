<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id('id_cat');
            $table->longText('label');
            $table->timestamp('updated_at')->useCurrent()->on('update')->useCurrent();
            $table->timestamp('created_at')->useCurrent()->on('update')->useCurrent();
            $table->tinyInteger('actif')->default(1);
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
