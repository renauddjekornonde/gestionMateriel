<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcceuilController extends Controller
{
    //le controller retourne la vue de notre page d'accueil 'app'
    public function index()
    {
        return view('content');
    }
}
