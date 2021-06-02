<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;


class ConnexionController extends Controller
{
    public function formulaire()
    {
        return view('profile/connexion');
    }

    public function traitement(Request $request)
    {
        Validator::make($request->all(), [
            'email' => ['bail', 'required', 'email'],
            'password' => ['bail', 'required'],
        ])->validate();

        $resultat = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

        if($resultat)
            return redirect('/mon-compte');

        return back()->withInput()->withErrors([
            'email' => 'Vos identifiants sont incorrectes',
        ]);
    }
}
