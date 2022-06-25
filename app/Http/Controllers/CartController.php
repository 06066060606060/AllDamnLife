<?php

namespace App\Http\Controllers;

use App\Models\Produits;
use App\Models\Paniers;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function getCart()
    {
     
       
        return view('cart', [
         
        ]);
    }
}
