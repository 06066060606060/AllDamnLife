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
       
    }
}
