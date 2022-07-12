<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminUserSeeder extends Seeder
{

    public function run()
    {
        User::create(['nom' => 'Murcia', 'prenom' => 'Mickael', 'email' => 'xmicky@hotmail.fr', 'profil' => 'admin', 'address' => 'mon adresse', 'zipCode' => '97410', 'numero_telephone' => '0601020304', 'city' => 'Saint-Pierre',  'password' => bcrypt('123456')]);
        User::create(['nom' => 'Smith', 'prenom' => 'Joaquim', 'email' => 'j.willsmith974@gmail.com', 'profil' => 'admin', 'address' => 'mon adresse', 'zipCode' => '97410', 'numero_telephone' => '0601020304', 'city' => 'Saint-Pierre', 'password' => bcrypt('123456')]);
        User::create(['nom' => 'Fabre', 'prenom' => 'Flore', 'email' => 'florefabre974@gmail.com', 'profil' => 'admin', 'address' => 'mon adresse', 'zipCode' => '97410', 'numero_telephone' => '0601020304', 'city' => 'Saint-Pierre', 'password' => bcrypt('123456')]);
        User::create(['nom' => 'Nativel', 'prenom' => 'Benji', 'email' => 'ben.nativel@gmail.com', 'profil' => 'admin', 'address' => 'mon adresse', 'zipCode' => '97410', 'numero_telephone' => '0601020304', 'city' => 'Saint-Pierre', 'password' => bcrypt('123456')]);
        User::create(['nom' => 'Tlm', 'prenom' => 'Flo', 'email' => 'floflo@gmail.com', 'profil' => 'admin', 'address' => 'mon adresse', 'zipCode' => '97410', 'numero_telephone' => '0601020304', 'city' => 'Saint-Pierre', 'password' => bcrypt('azerty')]);

        User::create(['nom' => 'david', 'prenom' => 'gerard', 'email' => 'flofloe@gmail.com', 'profil' => 'abonne', 'address' => 'mon adresse', 'zipCode' => '97410', 'numero_telephone' => '0601020304', 'city' => 'Saint-Pierre', 'password' => bcrypt('azerty')]);
        User::create(['nom' => 'francis', 'prenom' => 'john', 'email' => 'floddfelo@gmail.com', 'profil' => 'abonne', 'address' => 'mon adresse', 'zipCode' => '97410', 'numero_telephone' => '0601020304', 'city' => 'Saint-Pierre', 'password' => bcrypt('azerty')]);
        User::create(['nom' => 'otto', 'prenom' => 'danny', 'email' => 'flddoflo@gmail.com', 'profil' => 'abonne', 'address' => 'mon adresse', 'zipCode' => '97410', 'numero_telephone' => '0601020304', 'city' => 'Saint-Pierre', 'password' => bcrypt('azerty')]);
        User::create(['nom' => 'fight', 'prenom' => 'ron', 'email' => 'flddossflo@gmail.com', 'profil' => 'abonne', 'address' => 'mon adresse', 'zipCode' => '97410', 'numero_telephone' => '0601020304', 'city' => 'Saint-Pierre', 'password' => bcrypt('azerty')]);
    }
}
