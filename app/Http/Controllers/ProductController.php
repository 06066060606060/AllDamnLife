<?php

namespace App\Http\Controllers;

use App\Models\Produits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
   
    public function getProduct()
    {
        $produits = Produits::where('id', '!=' ,0)->inRandomOrder()->get();
        return view('index', [
            'produits' => $produits,
        ]);
    }

    public function getOneProduct($id)
    {
        $produit = Produits::find($id);
        //dd($produit);
        return view('card', [
            'produit' => $produit,
        ]);
    }

    public function getAllProducts()
    {
        $cards = Produits::all();
        return view('giveCards', [
            'cards' => $cards,
        ]);
    } 
    public function showProducts($id)
    {
        $cards = Produits::find($id);
        return view('card', [
            'cards' => $cards,
        ]);


    }
    public function addProduct(Request $request)
    {
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('/img','public');
      
  }

    $validate = $request->validate([
        'titre' => 'required',
        'prix' => 'required',
        'description' => 'required',
        'image' => 'required',
        'note' => 'required',
        // 'réalisateurs' => 'required|exists:réalisateurs,id',
        // 'salles' => 'required|exists:salles,id'


    ]);

    $card = new Produits();

    $card->titre = $validate['titre'];
    $card->prix = $validate['prix'];
    $card->description= $validate['description'];
    $card->image = $path;
    $card->note = $validate['note'];


    $card->save();


    return redirect()->route('addProduct');
    }

   
    
    
    // public function show($id)
    // {
    //     $cards = Produits::find($id);

    //     return view('parts.crudCards', [

    //         'cards' => $cards,
            

    //     ]);
    // } 
}
