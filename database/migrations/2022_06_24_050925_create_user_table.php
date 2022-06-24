<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('nom');
            $table->string('prenom');
            $table->longText('email')->index();
            $table->text('password');
            $table->text('pinCode');
            $table->text('confirmation_token');
            $table->enum('confirmation_object');
            $table->enum('gender');
            $table->enum('etat_compte');
            $table->dateTime('date_derniere_connexion');
            $table->enum('profil');
            $table->enum('type_identification');
            $table->tinyInteger('actif');
            $table->date('date_naissance');
            $table->string('username');
            $table->string('numero_telephone');
            $table->string('adress');
            $table->string('zipCode');
            $table->string('city');
            $table->string('country');
            $table->longText('photo');
            $table->string('last_email');
            $table->string('remember_token');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->integer('seuilId')->index();
            $table->integer('parrainId')->index();
            $table->enum('etat_relance');
            $table->integer('nombre_relance');
            $table->text('refused_token');
            $table->date('date_last_relance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
