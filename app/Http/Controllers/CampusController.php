<?php

namespace App\Http\Controllers;

use App\Models\Affectation;
use App\Models\Campus;
use App\Models\Category;
use App\Models\Entree;
use App\Models\Materiel;
use Illuminate\Http\Request;

class CampusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //cette fonction permet de recuperer tous les campus et les retourner
    public function index()
    {
        $campuses= Campus::get();
        $entrees= Entree::get();
        $categories= Category::get();
        $affectations= Affectation::get();
         $materiels= Materiel::get();
        return view('campus.index', compact('campuses', 'entrees', 'categories','affectations','materiels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
        // cette function nous renvoie à la page ou se trouve le formulaire d'ajout
    public function create()
    {
        return view('campus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
            //cette fonction permet d'ajouter une campus
    public function store(Request $request)
    {
        $data = $request->all();
        $campuses = new Campus();
        $campuses->intitule = $data['intitule'];
        $campuses->lieu = $data['lieu'];
        $campuses->telephone = $data['telephone'];
        $campuses->created_at = $data['created_at'];
        $campuses->updated_at = $data['updated_at'];
        $campuses->save();
        return redirect()->route('campus.index')->with('sucess', 'Campus ajouter avec sucess');

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
        $campuses= Campus::findOrFail($id);
        $entrees= Entree::get();
        $categories= Category::get();
        $affectations= Affectation::get();
        $materiels= Materiel::get();
         return view('campus.show', compact('campuses', 'entrees', 'categories','affectations','materiels'));
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
        $campuses= Campus::findOrFail($id);
        return view('campus.edit', compact('campuses'));
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
            'intitule'=> 'required',
            'lieu'=> 'required',
            'telephone'=> 'required',
            'created_at'=> 'required',
            'updated_at'=> 'required',

        ]);

        $campuses= Campus::find($id);
        $campuses->intitule= $request->intitule;
        $campuses->lieu= $request->lieu;
        $campuses->telephone= $request->telephone;
        $campuses->created_at= $request->created_at;
        $campuses->updated_at= $request->updated_at;
        $campuses->save();

        //redirection dans la page index contenant les campus apres modification et accompagner d'un message de confirmation

        return redirect()->route('campus.index')->with('sucess', 'Modification effectuer avec succes');
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
        Campus::find($id)->delete();

        //retourne la liste des campus avec une message de confirmation de la suppression

        return redirect()->route('campus.index')->with('sucess', 'Supprimer');
    }
}
