<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Paniers;
use App\Models\Comments;
use App\Models\Produits;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;



class ProductController extends Controller
{
    public function getProduct(Request $request)
    {
    

        if ($request->filled('note')) {
            $note = $request->note;
            $produits = Produits::where('note', '=', $note)->where('actif', '=', 1)->paginate(3);
            // dd($produits);
        } elseif ($request->filled('categories')) {
            $categories = $request->categories;
            $produits = Produits::where('cat_id', '=', $categories)->where('actif', '=', 1)->paginate(3);
        } elseif ($request->filled('prix')) {

            $prix = $request->prix;
            $produits = Produits::where('prix', '<=', $prix)->where('actif', '=', 1)->paginate(3);
            
        } else {
            $produits = Produits::where('actif', '=', 1)->paginate(3);
        }
       
        $categories = Categories::all();
        // $produits = Produits::where('actif', '=', 1)->get();
        // $produits = Produits::paginate(3);
      
        return view('index', [
            'produits' => $produits,
            'categories' => $categories,
            
        ]);}
    
       
    public function search()
    {  
        
       $categories=Categories::all(); 

        request()->validate([
            'q' => 'required|min:3'
        ]);

        $q = request()->input('q');
       
        $produits = Produits::where('titre', 'like','%'.$q.'%')->where('actif', '=', 1)->paginate(1);
        
         return view('index', [
            'produits' => $produits,
            'categories' => $categories,
            'q' => $q,]);         
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
        return redirect()->back();
    }

    public function addProduct(Request $request)
    {
        if ($request->hasFile('images')) {
            $path = Storage::disk('public')->put('img', $request->file('images'));
        }
        $card = new Produits();
        $card->titre =  $request->titre;
        $card->note = $request->note;
        $card->description = $request->description;
        $card->prix = $request->prix;
        $card->image = '/storage/' . $path;
        $card->save();
        $card->categorie()->attach($request->categories);
        return redirect()->back();
    }

    public function updateProduct(Request $request, $id)
    {
        $cards = Produits::where('id', '=', $id)->get();
        $cards = Produits::find($id);
        $cards->titre = $request->titre;
        $cards->note = $request->note;
        $cards->description = $request->description;
        $cards->prix = $request->prix;
        if ($request->hasFile('images')) {
            $cards->image = '/storage/' . Storage::disk('public')->put('img', $request->file('images'));
        } else {
            $cards->image = $cards->image;
        }
        $cards->categorie()->sync($request->categories);
        $cards->update();

        return redirect()->back();
    }

    public function deleteCard($id)
    {
        $delete = Produits::find($id);
        $delete->delete();
        return redirect()->back();
    }

//_____________________Commentaires______________________________________

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

    public function deleteComm($id)
    {
        $delete = Comments::find($id);
        $delete->delete();
        return redirect()->back();
    }
}
