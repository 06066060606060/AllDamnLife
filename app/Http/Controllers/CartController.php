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
        return view('cart', [
            'paniers' => $paniers,
            'produits' => $produits,
         
        ]);
    }

    public function addtoCart($id)
    {
        $paniers = Paniers::where('user_id', '=',  Auth::user()->id)->get();
        $produits = Produits::All();

        $Panier = new Paniers();
        $Panier->user_id = Auth::user()->id;
        $Panier->prod_id = $id;
        $Panier->save();
        return redirect()->route('cart')->with('cart_ok', 'ajouté');
    }
    




}
