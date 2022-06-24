<?php

namespace App\Http\Controllers;

use App\Models\Produits;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   
    public function getProduct()
    {
        $produits = Produits::all();
        return view('index', [
            'produits' => $produits,
        ]);
    }








}
