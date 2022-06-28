<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Produits;
use App\Models\Comments;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
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
        $timer = Carbon::now();
        $produit = Produits::find($id);
        $comments = Comments::where('product_id', $id)->inRandomOrder()->limit(2)->get();
        //dd($produit);
        return view('card', [
            'produit' => $produit,
            'comments' => $comments,
            'timer' => $timer,
        ]);
    }
    public function addComm(Request $request, $id)
    {
    
        $comm = new Comments();
        $comm->contenu = $request->contenu;
        $comm->user_id = Auth::user()->id;
        $comm->product_id = $id;
        $comm->note = $request->note;
        $comm->save();

        return redirect()->route('getCard', ['id' => $id]);
    }

}
