<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entree;

class EntreeController extends Controller
{
    //cette fonction permet de recuperer toutes les Entree et les retourner
    public function index(){
        $entrees= Entree::get();
        return view('entree.index', compact('entrees'));
    }

    //cette fonction permet d'ajouter une entree
    public function addNewEntree(Request $request)
    {
        $data = $request->all();
        $entree = new Entree();
        $entree->matricule = $data['matricule'];
        $entree->created_at = $data['created_at'];
        $entree->updated_at = $data['updated_at'];
        $entree->save();
        return redirect()->back();
    }

    //cette fonction permet de modifier les entrees
    public function update(Request $request, $id)
    {

        //cette requete oblige à ne pas laisser les champs vides
        $request->validate([
            'matricule'=> 'required',
            'created_at'=> 'required',
            'updated_at'=> 'required',
           

        ]);

        $entree= Entree::find($id);
        $entree->matricule= $request->matricule;
        $entree->created_at= $request->created_at;
        $entree->updated_at= $request->updated_at;
        $entree->save();

        //redirection dans la page index contenant les entrees apres modification de l'entree accompagner d'un message de confirmation

        return redirect()->route('entree.index')->with('sucess', 'Modification Effectuer Avec Succes');
    }

    //Fonction permettant de supprimer une entree
     public function destroy($id)
    {
        Entree::find($id)->delete();

        //retourne la liste des entrees avec une message de confirmation de la suppression

        return redirect()->route('entree.index')->with('sucess', 'Supprimer');
    }
}
