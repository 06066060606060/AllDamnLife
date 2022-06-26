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
        $paniers = Paniers::where('user_id', '=',  Auth::user()->id)->get();
        $produits = Produits::All();
        $price = 50;
        return view('cart', [
            'price' => $price,
            'paniers' => $paniers,
            'produits' => $produits,
         
        ]);
    }
}
