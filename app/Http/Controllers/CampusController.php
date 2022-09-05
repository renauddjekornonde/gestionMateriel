<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campus;

class CampusController extends Controller
{
     //cette fonction permet de recuperer tous les campus et les retourner
     public function index(){
        $campus= Campus::get();
        return view('campus.index', compact('campus'));
    }

    //cette fonction permet d'ajouter un campus
    public function addNewCampus(Request $request)
    {
        $data = $request->all();
        $campus = new Campus();
        $campus->intitule = $data['intitule'];
        $campus->lieu = $data['lieu'];
        $campus->telephone = $data['telephone'];
        $campus->created_at = $data['created_at'];
        $campus->updated_at = $data['updated_at'];
        $campus->save();
        return redirect()->back();
    }

    //cette fonction permet de modifier les données d'un campus
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

        $campus= Campus::find($id);
        $campus->intitule= $request->intitule;
        $campus->lieu= $request->lieu;
        $campus->telephone= $request->telephone;
        $campus->created_at= $request->created_at;
        $campus->updated_at= $request->updated_at;
        $campus->save();

        //redirection dans la page index contenant les campus apres modification et accompagner d'un message de confirmation

        return redirect()->route('campus.index')->with('sucess', 'Modification effectuer avec succes');
    }

    //Fonction permettant de supprimer une campus
     public function destroy($id)
    {
        Campus::find($id)->delete();

        //retourne la liste des campus avec une message de confirmation de la suppression

        return redirect()->route('campus.index')->with('sucess', 'Supprimer');
    }

     //Cette fonction permet de voir une campus en detaille
     public function show($id)
     {
         $campus= Campus::findOrFail($id);
         return view('campus.show', compact('campus'));
     }
 
    //Cette fonction permet de renvoyer la page d'edition d'un campus
     public function edit($id)
     {
         $campus= Campus::findOrFail($id);
         return view('campus.edit', compact('campus'));
     }
}
