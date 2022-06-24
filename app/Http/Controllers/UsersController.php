<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function getUsers()
    {
        $users = User::all();
        return view('users', [
            'users' => $users,
        ]);
    }

    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

    public function showUsers($id)
    {
        $users = User::find($id);
        return view('user', [
            'users' => $users,
        ]);
    }

 
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    
    {
        $validate = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'username' => 'required',
            'email' => 'required'
        ]);    
        $users=User::where('id','=',$id)->get();
        $users=User::find($id);
  
        $users->nom = $validate['nom'];
        $users->prenom = $validate['prenom'];
        $users->username = $validate['username'];
        $users->email = $validate['email'];
        $users->update();
        return redirect()->route('getUsers');
    }

    public function destroy($id)
    {
        
    {
        $delete = User::find($id);
        $delete->delete();
        return redirect()->route('users');
    }
    }


   
}
