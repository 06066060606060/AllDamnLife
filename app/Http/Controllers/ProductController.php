<?php

namespace App\Http\Controllers;


use App\Models\Produits;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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
        $produit = Produits::find($id);
        //dd($produit);
        return view('card', [
            'produit' => $produit,
        ]);
    }

    public function getAllProducts()
    {
        $cards = Produits::with('categs')->get();
        $categs = Categories::all();
        // $cards = Produits::all();
        return view('giveCards', [
            'cards' => $cards,
            'categs' => $categs
        ]);
    }
    public function showProducts($id)
    {
        $cards = Produits::find($id);
        return view('card', [
            'cards' => $cards,
        ]);
    }


    public function activeur(Request $request, $id)
    {
       

        $card = Produits::find($id);


        if ($request->active) {
            $card->active = 1;
        } else if ($request->desactive) {

            $card->active = 0;
        }


        $card->update();
        return redirect()->route('getAllProducts');
    }

    public function addProduct(Request $request)
    {
        if($request->file('image')!=null){
            $img = Storage::disk('public')->put('img', $request->file('image'));
            $path = '/storage/' . $img;
        // if ($request->hasFile('image')) {
        //     $path = $request->file('image')->store('/img', 'public');
            //Storage::disk('public')->put('img', $request->file('photo'));
        }
        $validate = $request->validate([
            'titre' => 'required',
            'prix' => 'required',
            'description' => 'required',
            'image' => 'required',
            'note' => 'required',
            'categories' => 'required|exists:categories,id',
            // 'réalisateurs' => 'required|exists:réalisateurs,id',
            // 'salles' => 'required|exists:salles,id'


        ]);

        $card = new Produits();

        $card->titre = $validate['titre'];
        $card->prix = $validate['prix'];
        $card->description = $validate['description'];
        $card->image = $path;
        $card->note = $validate['note'];
        $card->cat_id = $validate['categories'];


        $card->save();


        return redirect()->route('getAllProducts');
    }


    public function update(Request $request, $id)

    {
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('/img', 'public');
        }

        $validate = $request->validate([
            'titre' => 'required',
            'prix' => 'required',
            'description' => 'required',
            'image' => 'required',
            'note' => 'required',
            'categories' => 'required',
        ]);
        $cards = Produits::where('id', '=', $id)->get();
        $cards = Produits::find($id);

        $cards->titre = $validate['titre'];
        $cards->prix = $validate['prix'];
        $cards->description = $validate['description'];
        $cards->image = $path;
        $cards->note = $validate['note'];
        $cards->cat_id = $validate['categories'];
        $cards->update();
        return redirect()->route('getAllProducts');
    }
   

}
