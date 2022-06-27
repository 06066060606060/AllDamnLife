<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Paniers;
use App\Models\Produits;
use Illuminate\Http\Models;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function getCart()
    {
        $paniers = Paniers::where('user_id', '=',  Auth::user()->id)->get();
        $produits = Produits::All();
        return view('/cart', [
            'paniers' => $paniers,
            'produits' => $produits,
         
        ]);
    }

    public function addtoCart($id)
    {
        $Panier = new Paniers();
        $Panier->user_id = Auth::user()->id;
        $Panier->prod_id = $id;
        $Panier->save();
        return redirect()->route('getCard', $id)->with('cart_ok', 'ajouté');
    }
    
    public function deletefromCart($id)
    {
        // A fixer si plusieurs fois meme produit tous sont supprimmé
        $delete = Paniers::where('user_id', '=',  Auth::user()->id)->where('prod_id', '=', $id);
        $delete->delete();
        return redirect()->route('cart')->with('cart_delete', 'ajouté');
    }
    
}
