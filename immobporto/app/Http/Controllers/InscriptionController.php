<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;

class InscriptionController extends Controller
{
    public function formulaire()
    {
        return view('profile/inscription');
    }

    public function traitement(Request $request)
    {
        Validator::make($request->all(), [
            'nom' => [ 'required', 'string', 'max:255'],
            'prenom' => [ 'required', 'string'],
            'email' => [ 'required', 'email', 'unique:App\Models\Utilisateurs'],
            'tel' => ['required', 'unique:App\Models\Utilisateurs'],
            'password' => [ 'required', 'Min:8'],
            'password_confirmation' => [ 'required', 'confirmed'],
            'adresse' => [ 'required', 'string'],
        ])->validate();

        DB::table('utilisateurs')->insert([
            'nom' => request('nom'),
            'prenom' => request('prenom'),
            'email' => request('email'),
            'mot_de_passe' => bcrypt(request('password')),
            'tel' => request('tel'),
            'adresse' => request('adresse'),
            'role' => "utilisateur",
        ]);
    }
}
