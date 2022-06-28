<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCateg()
    {
        $categs = Categories::all();
        return view('categories', [
            'categs' => $categs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addCateg(Request $request)
    {
           //dd($request->file('affiche'));

    //        if ($request->hasFile('affiche')) {
    //         $path = $request->file('affiche')->store('/images','public');
    //   }

        $validate = $request->validate([
            'label' => 'required',
           
                    

        ]);
        
        $categ = new Categories();
      
        $categ->label = $validate['label'];
       
        
        $categ->save();
       

        return redirect()->route('getCateg');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)

    {
        $validate = $request->validate([
            'label' => 'required',
           
        ]);

        $categs = Categories::where('id', '=', $id)->get();
        $categs = Categories::find($id);

        $categs->label = $validate['label'];
       
        $categs->update();
        return redirect()->route('getCateg');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $delete = Categories::find($id);
        $delete->delete();
    
        return redirect()->route('getCateg');
    }
   
}
