<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Paniers;
use App\Models\Produits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function getCart()
    {
     
        $paniers = Paniers::with('produit')->get();
        $produits = Produits::All();
        $user = Auth::user();
        $panier = Paniers::where('user_id', '=', Auth::user()->id)->with('produit')->get();
       // dd($panier);
        return view('cart', [
         'panier' => $panier,
         'paniers' => $paniers,
         'produits' => $produits,
         'user' => $user,
        ]);
    }
}
