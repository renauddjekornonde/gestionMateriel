<?php

namespace App\Http\Controllers;

use App\Models\Affectation;
use App\Models\Category;
use App\Models\Entree;
use App\Models\Fournisseur;
use App\Models\Materiel;
use App\Models\Salle;
use Illuminate\Http\Request;

class AffectationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //cette fonction permet de recuperer toutes les affectations et les retourner
    public function index()
    {
        $entrees= Entree::get();
        $categories= Category::get();
        $affectations= Affectation::get();
        $materiels= Materiel::get();
        $fournisseurs= Fournisseur::get();
        return view('affectation.index', compact('affectations', 'entrees', 'categories', 'materiels','fournisseurs' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // cette function nous renvoie à la page ou se trouve le formulaire d'ajout
    public function create()
    {
        
        $materiels= Materiel::get();
        $entrees= Entree::get();
        $affectations= Affectation::get();
        $categories= Category::get();
        $salles= Salle::get();
        return view('affectation.create', compact('affectations', 'entrees', 'categories', 'materiels','salles' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        //cette fonction permet d'ajouter une affectation
    public function store(Request $request)
    {
         
        $materiels= Materiel::get();
        $entrees= Entree::get();
        $affectations= Affectation::get();
        $categories= Category::get();
        $salles= Salle::get();
     
        $data = $request->all();
        $affectation = new Affectation();
        $affectation->created_at = $data['created_at'];
        $affectation->salle_id = $data['salle'];
        $affectation->save();
        return redirect()->route('affectation.index', compact('affectations', 'entrees', 'categories', 'materiels','salles' ))->with('sucess', 'Affecation ajouter avec sucess');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //Cette fonction permet de voir une affectation en detaille
    public function show($id)
    {
        $affectations= Affectation::findOrFail($id);
        $entrees= Entree::get();
        $categories=Category::get();
        $materiels=Materiel::get();
        $fournisseurs= Fournisseur::get();
        return view('affectation.show', compact('affectations', 'entrees', 'categories', 'materiels','fournisseurs'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //  cette fonction permet de renvoyer la page ou se trouve le formulaire d'ffectation
    public function edit($id)
    {
        $affectations= Affectation::findOrFail($id);
        $entrees= Entree::get();
        $categories=Category::get();
        $materiels=Materiel::get();
         return view('affectation.edit', compact('affectations',  'entrees', 'categories', 'materiels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // cette fontion permet de modifier les affecations
    public function update(Request $request, $id)
    {

        //cette requete oblige à ne pas laisser les champs vides
        $request->validate([
            'created_at'=> 'required',
            'updated_at'=> 'required',
            'salle_id'=> 'required',

        ]);

        $affectation= Affectation::find($id);
        $affectation->created_at= $request->created_at;
        $affectation->updated_at= $request->updated_at;
        $affectation->salle_id= $request->salle_id;
        $affectation->save();

        //redirection dans la page index contenant les affectations apres modification de l'affectation accompagner d'un message de confirmation

        return redirect()->route('affectation.index')->with('sucess', 'Modification effectuer avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //Fonction permettant de supprimer une affectation
    public function destroy($id)
    {
        Affectation::find($id)->delete();

        //retourne la liste des affectations avec une message de confirmation de la suppression

        return redirect()->route('affectation.index')->with('sucess', 'Supprimer');
    }
}
