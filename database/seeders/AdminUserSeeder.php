<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create(['nom'=> 'Murcia', 'prenom'=> 'Mickael', 'email'=>'xmicky@hotmail.fr', 'email_verified_at'=> now(), 'password'=> bcrypt('123456')]);
        User::create(['nom'=> 'Smith', 'prenom'=> 'Joaquim', 'email'=>'j.willsmith974@gmail.com', 'email_verified_at'=> now(), 'password'=> bcrypt('123456')]);
        User::create(['nom'=> 'Fabre', 'prenom'=> 'Flore', 'email'=>'florefabre974@gmail.com', 'email_verified_at'=> now(), 'password'=> bcrypt('123456')]);
        User::create(['nom'=> 'Nativel', 'prenom'=> 'Benji', 'email'=>'ben.nativel@gmail.com', 'email_verified_at'=> now(), 'password'=> bcrypt('123456')]);
        User::create(['nom'=> 'Tlm', 'prenom'=> 'Flo', 'email'=>'floflo@gmail.com', 'email_verified_at'=> now(), 'password'=> bcrypt('azerty')]);
       
    }
}
