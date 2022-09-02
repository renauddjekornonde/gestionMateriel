<?php

namespace App\Http\Controllers;

use App\Models\Affectation;
use Illuminate\Http\Request;
use App\Models\Salle;

class AffectationController extends Controller
{
    //cette fonction permet de recuperer toutes les affectations et les retourner
    public function index(){
        $affectations= Affectation::get();
        return view('affectation.index', compact('affectations'));
    }

    //cette fonction permet d'ajouter une affectation
    public function addNewAffectation(Request $request)
    {
        $data = $request->all();
        $affectation = new Affectation();
        $affectation->created_at = $data['created_at'];
        $affectation->updated_at = $data['updated_at'];
        $affectation->salle_id = $data['salle'];
        $affectation->save();
        return redirect()->back();
    }

    //cette fonction permet de modifier les affectations
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

    //Fonction permettant de supprimer une affectation
     public function destroy($id)
    {
        Affectation::find($id)->delete();

        //retourne la liste des affectations avec une message de confirmation de la suppression

        return redirect()->route('affectation.index')->with('sucess', 'Supprimer');
    }
}
