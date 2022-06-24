<?php

namespace Database\Seeders;
use App\Models\Produits;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produits::create(['titre'=> 'Carte Netflix', 'description'=> 'carte abo netflix', 'prix'=>'20',  'image'=> '/img/netflix.png', 'cat_id'=>'1', 'quantite'=>'10']);
        Produits::create(['titre'=> 'Carte Disney+', 'description'=> 'carte abo disney', 'prix'=>'20',  'image'=> '/img/disney.png', 'cat_id'=>'1', 'quantite'=>'10']);
        Produits::create(['titre'=> 'Carte xbox', 'description'=> 'carte abo xbox live', 'prix'=>'20',  'image'=> '/img/xbox.png', 'cat_id'=>'1', 'quantite'=>'10']);
        Produits::create(['titre'=> 'Carte steam', 'description'=> 'carte abo steam', 'prix'=>'20',  'image'=> '/img/steam.png', 'cat_id'=>'1', 'quantite'=>'10']);
        Produits::create(['titre'=> 'Carte amazon', 'description'=> 'carte abo amazon', 'prix'=>'20',  'image'=> '/img/amazon.png', 'cat_id'=>'1', 'quantite'=>'10']);
        Produits::create(['titre'=> 'Carte apple', 'description'=> 'carte abo itunes', 'prix'=>'20',  'image'=> '/img/itunes.png', 'cat_id'=>'1', 'quantite'=>'10']);
        Produits::create(['titre'=> 'Carte psn+', 'description'=> 'carte abo playstation', 'prix'=>'20',  'image'=> '/img/psn.png', 'cat_id'=>'1', 'quantite'=>'10']);
        Produits::create(['titre'=> 'Carte google', 'description'=> 'carte google play', 'prix'=>'20',  'image'=> '/img/google.png', 'cat_id'=>'1', 'quantite'=>'10']);
    }
}
