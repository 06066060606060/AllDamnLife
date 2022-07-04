<?php

namespace App\Http\Controllers;

use App\Models\Paniers;
use App\Models\Produits;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function getCart()
    {
        $paniers = Paniers::where('user_id', Auth::id())->sum('quantite');     
        $mycart =  Paniers::where('user_id', '=',  Auth::user()->id)->get();
        $produits = Produits::All();
        return view('/cart', [
            'mycart' => $mycart,
            'paniers' => $paniers,
            'produits' => $produits,
         
        ]);
    }

// fonction statique affichage nombres articles dans le panier
// utilisable dans toutes les vues en declarant @php  use \App\Http\Controllers\CartController; @endphp
// et {{ CartController::MonPanier() }} pour afficher le resultat super pratique!

    public static function MonPanier(){
        if (Auth::check()) {
            return  $paniers = Paniers::where('user_id', Auth::id())->sum('quantite'); 
        } else {
            return  $paniers = null;
        }

    }

    public function addtoCart($id)
    {

           $Panier = Paniers::where('user_id',Auth::id())->where('prod_id',$id)->first();
        if($Panier){
            $Panier = Paniers::where('user_id',Auth::id())->where('prod_id',$id)->first();
            $Panier->increment('quantite',1);
        }else{
            $Panier = new Paniers();
            $Panier->user_id = Auth::user()->id;
            $Panier->prod_id = $id;
            $Panier->save();
        }
       
        return redirect()->route('getCard', $id)->with('cart_ok', 'ajouté');
    }
    
    public function deletefromCart($id)
    {
       
        $Panier = Paniers::where('user_id',Auth::id())->where('prod_id',$id)->first();
            if ($Panier->quantite == 1)
            {
                $Panier->where('prod_id',$id)->delete();
            }
            else
            {
                $Panier->where('prod_id',$id)->decrement('quantite');
            }      
        return redirect()->route('cart')->with('cart_delete', 'ajouté');
    }
    
}
