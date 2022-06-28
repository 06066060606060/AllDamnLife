<?php

namespace App\Http\Controllers;

use App\Models\Produits;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
   
    public function getProduct(Request $request)
    {


        if ($request->filled('categories')) {
            $categories = $request->categories;
            $produits = Produits::where('cat_id', '=', $categories)->get();
        } else {
            $produits = Produits::inRandomOrder()->get();
        }

        $categories = Categories::all();

        return view('index', [
             'produits' => $produits,
             'categories' => $categories,
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
