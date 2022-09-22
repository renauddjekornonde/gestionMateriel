<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Affectation;
use App\Models\Category;
use App\Models\Entree;
use App\Models\Fournisseur;
use App\Models\Materiel;
use App\Models\Operation;
use App\Models\Salle;
use App\Models\Campus;
use App\Models\User;

class HistoriqueController extends Controller
{
    public function index()
    {
        $entrees= Entree::get();
        $categories= Category::get();
        $affectations= Affectation::get();
        $materiels= Materiel::get();
        $fournisseurs= Fournisseur::get();
        $salles= Salle::get();
        $campuses= Campus::get();
        // dd($salles);
        $operations= Operation::with('materiel')->get();
        
        return view('historique.index', compact('affectations', 'entrees', 'categories','fournisseurs', 'campuses', 'salles', 'operations', 'materiels' ));
    }
}
