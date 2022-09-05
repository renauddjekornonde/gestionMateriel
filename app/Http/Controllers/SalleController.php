<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use Illuminate\Http\Request;

class SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //cette fonction permet de recuperer toutes les salles et les retourner
    public function index()
    {
        $salles= Salle::get();
        return view('salle.index', compact('salles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
        // cette function nous renvoie à la page ou se trouve le formulaire d'ajout
    public function create()
    {
        return view('salle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //cette fonction permet d'ajouter une salle
    public function store(Request $request)
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


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //Cette fonction permet de voir une salle en detaille
    public function show($id)
    {
        $salles= Salle::findOrFail($id);
        return view('salle.show', compact('salles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        //Cette fonction permet de renvoyer la page d'edition d'une salle
    public function edit($id)
    {
        $salle= Salle::findOrFail($id);
        return view('salle.edit', compact('salles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Fonction permettant de supprimer une salle
    public function destroy($id)
    {
        Salle::find($id)->delete();

        //retourne la liste des salles avec une message de confirmation de la suppression

        return redirect()->route('salle.index')->with('sucess', 'Supprimer');
    }
}
