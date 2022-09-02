<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use Illuminate\Http\Request;
use App\Models\Operatiion;
use App\Models\User;
use App\Models\Materiel;
use App\Models\Entree;
use App\Models\Affectation;

class OperationController extends Controller
{
     //cette fonction permet de recuperer toutes les operations et les retourner
     public function index(){
        $operations= Operation::get();
        return view('operation.index', compact('operations'));
    }

    //cette fonction permet d'ajouter une operation
    public function addNewOperation(Request $request)
    {
        $data = $request->all();
        $operation = new Operation();
        $operation->quantite = $data['quantite'];
        $operation->typeOperation = $data['typeOperation'];
        $operation->created_at = $data['created_at'];
        $operation->updated_at = $data['updated_at'];
        $operation->user_id = $data['user'];
        $operation->materiel_id = $data['materiel'];
        $operation->entree_id = $data['entree'];
        $operation->affectation_id = $data['affectation'];
        $operation->save();
        return redirect()->back();
    }

    //cette fonction permet de modifier les operations
    public function update(Request $request, $id)
    {

        //cette requete oblige à ne pas laisser les champs vides
        $request->validate([
            'quantite'=> 'required',
            'typeOperation'=> 'required',
            'created_at'=> 'required',
            'updated_at'=> 'required',
            'user_id'=> 'required',
            'materiel_id'=> 'required',
            'entree_id'=> 'required',
            'affectation_id'=> 'required',

        ]);

        $operation= Operation::find($id);
        $operation->quantite= $request->created_at;
        $operation->typeOperation= $request->created_at;
        $operation->created_at= $request->created_at;
        $operation->updated_at= $request->updated_at;
        $operation->user_id= $request->user_id;
        $operation->materiel_id= $request->materiel_id;
        $operation->entree_id= $request->entree_id;
        $operation->affectation_id= $request->affectation_id;
        $operation->save();

        //redirection dans la page index contenant les operations apres modification de l'operation accompagner d'un message de confirmation

        return redirect()->route('operation.index')->with('sucess', 'Modification Effectuer Avec Succes');
    }

    //Fonction permettant de supprimer une operation
     public function destroy($id)
    {
        Operation::find($id)->delete();

        //retourne la liste des operations avec une message de confirmation de la suppression

        return redirect()->route('operation.index')->with('sucess', 'Supprimer');
    }
}
