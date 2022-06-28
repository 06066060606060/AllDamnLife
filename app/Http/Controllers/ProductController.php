<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Produits;
use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function getProduct()
    {
        $produits = Produits::where('id', '!=', 0)->inRandomOrder()->get();
        return view('index', [
            'produits' => $produits,
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
