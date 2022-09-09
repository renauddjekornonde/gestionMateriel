<?php

namespace App\Http\Controllers;

use App\Models\Affectation;
use Illuminate\Http\Request;
use App\Models\Materiel;
use App\Models\Fournisseur;
use App\Models\Operation;
use App\Models\Category;
use App\Models\Entree;
use Illuminate\Cache\RateLimiting\Limit;

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
    
}
