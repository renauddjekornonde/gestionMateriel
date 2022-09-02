<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materiel;
use App\Models\Category;
use App\Models\Fournisseur;

class MaterielController extends Controller
{
    //cette fonction permet de recuperer toutes les materiels et les retourner
    public function index(){
        $materiels= Materiel::get();
        return view('materiel.index', compact('materiels'));
    }

    //cette fonction permet d'ajouter un materiel
    public function addNewMateriel(Request $request)
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
        return redirect()->back();
    }

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

    //Fonction permettant de supprimer un materiel
     public function destroy($id)
    {
        Materiel::find($id)->delete();

        //retourne  la liste des materiels restant avec un message de confirmation de la suppression

        return redirect()->route('materiel.index')->with('sucess', 'Supprimer');
    }
}
