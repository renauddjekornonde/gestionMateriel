<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilGerantController extends Controller
{
    function indexe()
    {
        $categories= Category::get();
        $fournisseurs= Fournisseur::get();
        $materiels= Materiel::get();
        $entrees= Entree::get();
        $affectations= Affectation::get();

        return view('gerant.login', compact('fournisseurs', 'materiels','categories', 'entrees', 'affectations'));
    }

    
    function validate_login(Request $request)
    {
        $categories= Category::select()->inRandomOrder('created_at')->Limit(2)->get();
        $fournisseurs= Fournisseur::select()->inRandomOrder('created_at')->Limit(2)->get();
        $materiels= Materiel::select()->inRandomOrder('created_at')->Limit(2)->get();
        $entrees= Entree::select()->inRandomOrder('created_at')->Limit(2)->get();
        $affectations= Affectation::select()->inRandomOrder('created_at')->Limit(2)->get();

        $request->validate([
            'email' =>'required',
            'password' => 'required',
        ]);

        $credentials= $request->only('email', 'password');
        
        if(Auth::attempt($credentials))
        {
            return view('gerant.index', compact('fournisseurs', 'materiels','categories', 'entrees', 'affectations'));
        }
         else
          {
             return redirect('gerant/login')->with('sucess', 'Authentification non valide');
          }  
    }

     function home()
     {
        $categories= Category::select()->inRandomOrder('created_at')->Limit(2)->get();
        $fournisseurs= Fournisseur::select()->inRandomOrder('created_at')->Limit(2)->get();
        $materiels= Materiel::select()->inRandomOrder('created_at')->Limit(2)->get();
        $entrees= Entree::select()->inRandomOrder('created_at')->Limit(2)->get();
        $affectations= Affectation::select()->inRandomOrder('created_at')->Limit(2)->get();

         if(Auth::check())
         {
             return view('gerant.index', compact('fournisseurs', 'materiels','categories', 'entrees', 'affectations'));
         }
         else
     {
             return redirect('gerant.login')->with('Vous n\'etes pas autoriser à acceder à cette page' );
         }
     }

    function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('gerant.login');
    }

}
