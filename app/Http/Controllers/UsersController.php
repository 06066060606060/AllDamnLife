<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Paniers;
use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class UsersController extends Controller
{
    public function getUsers()
    {
        if (Auth::check()) {
            $paniers = Paniers::where('user_id', '=',  Auth::user()->id)->get();
        } else {
            $paniers = null;
        }

        $users = User::all();
        return view('users', [
            'paniers' => $paniers,
            'users' => $users,
        ]);
    }


    public function activisor(Request $request, $id)
    {

        $user = User::find($id);
        if ($request->actif) {
            $user->actif = 1;
        } else if ($request->desactif) {
            $user->actif = 0;
        }
        $user->update();
        return redirect()->route('getUsers');
    }

    public function updateProfil(Request $request, $id)
    {

        if ($request->file('photo') != null) {
            $img = Storage::disk('public')->put('img', $request->file('photo'));
            $path = '/storage/' . $img;
        } else {
            $path = '/img/avatar.png';
        }

        $users = User::where('id', '=', $id)->get();
        $users = User::find($id);


        $users->nom = $request['nom'];
        $users->prenom = $request['prenom'];
        $users->username = $request['pseudo'];

        $users->address = $request['address'];
        $users->numero_telephone = $request['phone'];
        $users->city = $request['city'];
        $users->country = $request['country'];
        $users->zipCode = $request['zip'];

        $users->photo = $path;
        $users->update();
        return redirect('/');
    }

    public function profil()
    {

        if (Auth::check()) {
            $paniers = Paniers::where('user_id', '=',  Auth::user()->id)->get();
        } else {
            $paniers = null;
        }

        return view('account', [
            'paniers' => $paniers,
        ]);
    }


    public function userprofil($id)
    {
        if (Auth::check()) {
            $paniers = Paniers::where('user_id', '=',  Auth::user()->id)->get();
        } else {
            $paniers = null;
        }
        $comments = Comments::where('user_id', '=', $id)->limit(3)->get();
        $user = User::where('id', '=', $id)->get();
        $user = User::find($id);
        return view('userAccount', [
            'comments' => $comments,
            'user' => $user,
            'paniers' => $paniers,
        ]);
    }

    public function Allusers()
    {

        if (Auth::check()) {
            $paniers = Paniers::where('user_id', '=',  Auth::user()->id)->get();
        } else {
            $paniers = null;
        }

        return view('account', [
            'paniers' => $paniers,
        ]);
    }

    public function showUsers($id)
    {
        if (Auth::check()) {
            $paniers = Paniers::where('user_id', '=',  Auth::user()->id)->get();
        } else {
            $paniers = null;
        }
        $users = User::find($id);
        return view('user', [
            'paniers' => $paniers,
            'users' => $users,
        ]);
    }

    public function update(Request $request, $id)

    {
        $validate = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'role' => 'required'
        ]);
        $users = User::where('id', '=', $id)->get();
        $users = User::find($id);
        $users->nom = $validate['nom'];
        $users->prenom = $validate['prenom'];
        $users->email = $validate['email'];
        $users->address = $request->address;
        $users->zipCode = $request->zip;
        $users->city = $request->city;
        $users->numero_telephone = $request->phone;
        $users->username = $request->username;
        $users->profil = $validate['role'];
        $users->update();
        return redirect()->back();
    }
}
