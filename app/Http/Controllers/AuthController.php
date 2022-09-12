<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;
use Session;
use App\Models\Affectation;
use App\Models\Materiel;
use App\Models\Fournisseur;
use App\Models\Operation;
use App\Models\Category;
use App\Models\Entree;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function index()
    {
        $categories= Category::select()->inRandomOrder('created_at')->Limit(2)->get();
        $fournisseurs= Fournisseur::select()->inRandomOrder('created_at')->Limit(2)->get();
        $materiels= Materiel::select()->inRandomOrder('created_at')->Limit(2)->get();
        $entrees= Entree::get();
        $affectations= Affectation::get();

        return view('auth.login', compact('fournisseurs', 'materiels','categories', 'entrees', 'affectations'));
    }

    function validate_login(Request $request)
    {
        $request->validate([
            'email' =>'required',
            'password' => 'required',
        ]);

        $credentials= $request->only('email', 'password');
        
        if(Auth::attempt($credentials) & Auth::check())
        {
            return redirect()->route('home');
        }
        else
         {
            return redirect('')->with('sucess', 'Authentification non valide');
         }  
    }

    // function home()
    // {
    //     if(Auth::check())
    //     {
    //         return view('/home');
    //     }
    //     else
    //     {
    //         return redirect('')->with('Vous n\'etes pas autoriser à acceder à cette page' );
    //     }
    // }

    function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('auth.login');
    }
}
