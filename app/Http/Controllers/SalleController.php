<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salle;
use App\Models\Campus;

class SalleController extends Controller
{
   //cette fonction permet de recuperer toutes les salles et les retourner
   public function index(){
    $salles= Salle::get();
    return view('salle.index', compact('salles'));
}

//cette fonction permet d'ajouter une salle
public function addNewSalle(Request $request)
{
    $data = $request->all();
    $salle = new Salle();
    $salle->intitule = $data['intitule'];
    $salle->created_at = $data['created_at'];
    $salle->updated_at = $data['updated_at'];
    $salle->campus_id = $data['campus'];
    $salle->save();
    return redirect()->back();
}

//cette fonction permet de modifier les salles
public function update(Request $request, $id)
{

    //cette requete oblige à ne pas laisser les champs vides
    $request->validate([
        'intitule'=> 'required',
        'created_at'=> 'required',
        'updated_at'=> 'required',
        'campus_id'=> 'required',

    ]);

    $salle= Salle::find($id);
    $salle->intitule= $request->intitule;
    $salle->created_at= $request->created_at;
    $salle->updated_at= $request->updated_at;
    $salle->campus_id= $request->campus_id;
    $salle->save();

    //redirection dans la page index contenant les salles apres modification de la salle accompagner d'un message de confirmation

    return redirect()->route('salle.index')->with('sucess', 'Modification Mffectuer Avec Succes');
}

//Fonction permettant de supprimer une salle
 public function destroy($id)
{
    Salle::find($id)->delete();

    //retourne la liste des salles avec une message de confirmation de la suppression

    return redirect()->route('salle.index')->with('sucess', 'Supprimer');
}

    //Cette fonction permet de voir une salle en detaille
    public function show($id)
    {
        $salles= Salle::findOrFail($id);
        return view('salle.show', compact('salles'));
    }

    //Cette fonction permet de renvoyer la page d'edition d'une salle
    public function edit($id)
    {
        $salle= Salle::findOrFail($id);
        return view('salle.edit', compact('salles'));
    }
}
