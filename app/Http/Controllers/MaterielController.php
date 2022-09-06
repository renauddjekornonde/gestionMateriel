<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Affectation;
use App\Models\Materiel;
use App\Models\Category;
use App\Models\Entree;
use App\Models\Fournisseur;

class MaterielController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //cette fonction permet de recuperer toutes les materiels et les retourner
    public function index()
    {
        $entrees= Entree::get();
        $categories= Category::get();
        $affectations= Affectation::get();
        $materiels= Materiel::get();
        $fournisseurs= Fournisseur::get();
        return view('materiel.index', compact('materiels', 'fournisseurs', 'categories', 'entrees', 'affectations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //fonction permettant de nous diriger vers la page d'insertion de materiel
    public function create()
    {
        return view('materiel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //cette fonction permet de creer un materiel
    public function store(Request $request)
    {
        $data = $request->all();
        $materiel = new Materiel();
        $materiel->matricule = $data['matricule'];
        $materiel->intitule = $data['intitule'];
        $materiel->description = $data['description'];
        $materiel->created_at = $data['created_at'];
        $materiel->updated_at = $data['updated_at'];
        $materiel->category_id = $data['category'];
        $materiel->fournisseur_id = $data['fournisseur'];
        $materiel->save();

        return redirect()->route('materiel.index')->with('sucess', 'Materiel ajoute avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

      //Cette fonction permet de voir un materiel en detaille
    public function show($id)
    {
        $materiels= Materiel::findOrFail($id);
        $entrees= Entree::get();
        $affectations= Affectation::get();
        $categories= Category::get();
        return view('materiel.show', compact('materiels', 'entrees', 'affectations', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //Cette fonction permet de renvoyer la page d'edition d'un materiel
    public function edit($id)
    {
        $materiels= Materiel::findOrFail($id);
        return view('materiel.edit', compact('materiels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

      //cette fonction permet de modifier les materiels
    public function update(Request $request, $id)
    {
          //cette requete oblige à ne pas laisser les champs vides
          $request->validate([
            'matricule'=> 'required',
            'intitule'=> 'required',
            'description'=> 'required',
            'created_at'=> 'required',
            'updated_at'=> 'required',
            'category_id'=> 'required',
            'fournisseur_id'=> 'required',

        ]);

        $materiel= Materiel::find($id);
        $materiel->matricule= $request->matricule;
        $materiel->intitule= $request->intitule;
        $materiel->description= $request->description;
        $materiel->created_at= $request->created_at;
        $materiel->updated_at= $request->updated_at;
        $materiel->category_id= $request->category_id;
        $materiel->fournisseur_id= $request->fournisseur_id;
        $materiel->save();

        //redirection dans la page index contenant les materiels apres modification de données du materiel accompagner d'un message de confirmation

        return redirect()->route('materiel.index')->with('sucess', 'Modification Effectuer Avec Succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

      //Fonction permettant de supprimer un materiel
    public function destroy($id)
    {
        Materiel::find($id)->delete();

        //retourne  la liste des materiels restant avec un message de confirmation de la suppression

        return redirect()->route('materiel.index')->with('sucess', 'Supprimer');
    }
    
}