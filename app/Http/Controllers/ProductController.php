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

        if ($request->filled('note')) {
            $note = $request->note;

            $produits = Produits::where('note', '=', $note)->get();
        } elseif ($request->filled('categories')) {
            $categories = $request->categories;
            $produits = Produits::where('cat_id', '=', $categories)->get();
        } elseif ($request->filled('prix')) {
            $prix = $request->prix;
            $produits = Produits::where('prix', '<=', $prix)->get();
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
        
        return view('card', [
            'produit' => $produit,
            'comments' => $comments,
            'timer' => $timer,
        ]);
    }

    public function getAllProducts()
    {
        $cards = Produits::All();
        $categories = Categories::all();
        return view('giftCards', [
            'cards' => $cards,
            'categories' => $categories
        ]);
    }

    public function activeur(Request $request, $id)
    {
        $card = Produits::find($id);
        if ($request->active) {
            $card->actif = 1;
        } else if ($request->desactive) {

            $card->actif = 0;
        }
        $card->update();
        return redirect()->route('getAllProducts');
    }

    public function addProduct(Request $request)
    {
        if ($request->hasFile('images')) {
            $path = Storage::disk('public')->put('img', $request->file('images'));
        }

        $card = new Produits();
        $card->titre =  $request->titre;
        $card->prix = $request->prix;
        $card->description = $request->description;
        $card->image = '/storage/' . $path;
        $card->cat_id =  $request->categories;
        $card->save();
        return redirect()->route('getAllProducts');
    }

    public function updateProduct(Request $request, $id)
    {
        if ($request->hasFile('images')){
            $path = '/storage/' . Storage::disk('public')->put('img', $request->file('images'));
            } else {
            $path = '/img/avatar.png';
            }
            
        $cards = Produits::where('id', '=', $id)->get();
        $cards = Produits::find($id);
        $cards->titre = $request->titre;
        $cards->prix = $request->prix;
        $cards->description = $request->description;
        $cards->image = '/storage/' . $path;
        $cards->cat_id = $request->categories;
        $cards->update();
        return redirect()->route('getAllProducts');
    }

    public function deleteCard($id)
    {
        $delete = Produits::find($id);
        $delete->delete();
        return redirect()->route('getAllProducts');
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
