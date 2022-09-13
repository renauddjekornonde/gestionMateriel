<?php

namespace App\Http\Controllers;

use App\Models\Affectation;
use Illuminate\Http\Request;
use App\Models\Materiel;
use App\Models\Fournisseur;
use App\Models\Operation;
use App\Models\Category;
use App\Models\Entree;
use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;

class AcceuilController extends Controller
{
    //le controller retourne la vue de notre page d'accueil home
    public function index()
    {
        $categories= Category::select()->inRandomOrder('created_at')->Limit(2)->get();
        $fournisseurs= Fournisseur::select()->inRandomOrder('created_at')->Limit(2)->get();
        $materiels= Materiel::select()->inRandomOrder('created_at')->Limit(2)->get();
        $entrees= Entree::get();
        $affectations= Affectation::get();

        // $operations= Operation::with('materiel')->get();
        // dd($operations);
        return view('home', compact('fournisseurs', 'materiels','categories', 'entrees', 'affectations'));
    }
    public function profil()
    {
        $categories= Category::select()->inRandomOrder('created_at')->Limit(2)->get();
        $fournisseurs= Fournisseur::select()->inRandomOrder('created_at')->Limit(2)->get();
        $materiels= Materiel::select()->inRandomOrder('created_at')->Limit(2)->get();
        $entrees= Entree::get();
        $affectations= Affectation::get();

    
        return view('profil', compact('fournisseurs', 'materiels','categories', 'entrees', 'affectations'));
    }

    function indexe()
    {
        $categories= Category::get();
        $fournisseurs= Fournisseur::get();
        $materiels= Materiel::get();
        $entrees= Entree::get();
        $affectations= Affectation::get();

        return view('auth.login', compact('fournisseurs', 'materiels','categories', 'entrees', 'affectations'));
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
            return view('/home', compact('fournisseurs', 'materiels','categories', 'entrees', 'affectations'));
        }
         else
          {
             return view('')->with('sucess', 'Authentification non valide');
          }  
    }

     function home()
     {
        $categories= Category::get();
        $fournisseurs= Fournisseur::get();
        $materiels= Materiel::get();
        $entrees= Entree::get();
        $affectations= Affectation::get();

         if(Auth::check())
         {
             return view('/home', compact('fournisseurs', 'materiels','categories', 'entrees', 'affectations'));
         }
         else
     {
             return redirect('')->with('Vous n\'etes pas autoriser à acceder à cette page' );
         }
     }

    function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('');
    }
}
