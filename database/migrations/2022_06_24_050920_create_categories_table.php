<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id('id');
            $table->longText('label');
            $table->timestamp('updated_at')->useCurrent()->on('update')->useCurrent();
            $table->timestamp('created_at')->useCurrent()->on('update')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
