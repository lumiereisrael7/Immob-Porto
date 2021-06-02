<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function formulaire()
    {
        return view('contact');
    }

    public function traitement()
    {
        request()->validate([
            'nom' => ['required', 'string'],
            'email' => ['email', 'required'],
            'password' => ['required'],
        ]);

        return 'Traitement formulaire';
    }
}
