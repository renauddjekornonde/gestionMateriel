<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use Illuminate\Http\Request;
use App\Models\Affectation;
use App\Models\Materiel;
use App\Models\Category;
use App\Models\Entree;
use Session;
use App\Models\Fournisseur;

class OperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    //cette fonction permet de recuperer toutes les operations et les retourner
    public function index()
    {
        $operations= Operation::with('materiel')->get();
        return view('operation.index', compact('operations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
         // cette function nous renvoie à la page ou se trouve le formulaire d'ajout

    public function create()
    {
        return view('operation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
          //cette fonction permet d'ajouter une operation
    public function store(Request $request)
    {
        $data = $request->all();
        $operation = new Operation();
        $operation->quantite = $data['quantite'];
        $operation->typeOperation = $data['typeOperation'];
        $operation->user_id = $data['user'];
        $operation->materiel_id = $data['materiel'];
        $operation->entree_id = $data['entree'];
        $operation->affectation_id = $data['affectation'];
        $operation->save();
        return redirect()->route('operation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      //Cette fonction permet de voir une operation en detaille
    public function show($id)
    {
        $operations= Operation::findOrFail($id);
         return view('operation.show', compact('operations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //Cette fonction permet de renvoyer la page d'edition d'une operation
    public function edit($id)
    {
        $operations= Operation::findOrFail($id);
        return view('operation.edit', compact('operations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        //cette fonction permet de modifier les operations
    public function update(Request $request, $id)
    {

        //cette requete oblige à ne pas laisser les champs vides
        $request->validate([
            'quantite'=> 'required',
            'typeOperation'=> 'required',
            // 'created_at'=> 'required',
            // 'updated_at'=> 'required',
            'user_id'=> 'required',
            'materiel_id'=> 'required',
            'entree_id'=> 'required',
            'affectation_id'=> 'required',

        ]);

        $operation= Operation::find($id);
        $operation->quantite= $request->created_at;
        $operation->typeOperation= $request->created_at;
        // $operation->created_at= $request->created_at;
        // $operation->updated_at= $request->updated_at;
        $operation->user_id= $request->user_id;
        $operation->materiel_id= $request->materiel_id;
        $operation->entree_id= $request->entree_id;
        $operation->affectation_id= $request->affectation_id;
        $operation->save();

        //redirection dans la page index contenant les operations apres modification de l'operation accompagner d'un message de confirmation

        return redirect()->route('operation.index')->with('sucess', 'Modification Effectuer Avec Succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //Fonction permettant de supprimer une operation
    public function destroy($id)
    {
        Operation::find($id)->delete();

        //retourne la liste des operations avec une message de confirmation de la suppression

        return redirect()->route('operation.index')->with('sucess', 'Supprimer');
    }

   
}
