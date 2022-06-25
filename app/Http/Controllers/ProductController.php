<?php

namespace App\Http\Controllers;

use App\Models\Produits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
   
    public function getProduct()
    {
        $produits = Produits::where('id','!=',0)->inRandomOrder()->get();
        return view('index', [
            'produits' => $produits,
        ]);
    }

    public function getOneProduct($id)
    {
        $produit = Produits::find($id);
        //dd($produit);
        return view('card', [
            'produit' => $produit,
        ]);
    }
}
