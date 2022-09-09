<?php

namespace App\Http\Controllers;
use App\Models\Affectation;
use App\Models\Materiel;
use App\Models\Category;
use App\Models\Campus;
use App\Models\Entree;
use App\Models\Salle;
use App\Models\Campus;
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
        $materiels= Materiel::get();
        $entrees= Entree::get();
        $affectations= Affectation::get();
        $categories= Category::get();
        $campuses= Campus::get();
     
        return view('salle.index', compact('salles', 'campuses','materiels', 'entrees', 'affectations', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
        // cette function nous renvoie à la page ou se trouve le formulaire d'ajout
    public function create()

    {
        $campuses= Campus::get();
        $materiels= Materiel::get();
        $entrees= Entree::get();
        $affectations= Affectation::get();
        $categories= Category::get();
        $salles= Salle::get();
        $campuses= Campus::get();
        
<<<<<<< HEAD
        return view('salle.create',   compact('materiels','campuses', 'entrees', 'affectations', 'categories', 'salles'));
=======
        return view('salle.create',   compact('materiels', 'campuses','entrees', 'affectations', 'categories', 'salles'));
>>>>>>> 3e33f2a (update de index et show)
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
      
        $materiels= Materiel::get();
        $campuses= Campus::get();
        $entrees= Entree::get();
        $affectations= Affectation::get();
        $categories= Category::get();
        $salles= Salle::get();
     
        $data = $request->all();
        $salle = new Salle();
        $salle->numeroSalle = $data['numeroSalle'];
<<<<<<< HEAD
        $salle->campus_id = $data['campus'];
        $salle->save();
        return redirect()->route('salle.index',  compact('materiels','campuses', 'entrees', 'affectations', 'categories', 'salles'))->with('sucess', 'Salle ajoute avec succes');
=======
        $salle->campus_id= $data['campus_id'];
        $salle->save();
        return redirect()->route('salle.index',  compact('materiels', 'entrees', 'affectations', 'categories', 'salles'))->with('sucess', 'Salle ajouter avec succes');
>>>>>>> 3e33f2a (update de index et show)
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
        $materiels= Materiel::get();
        $entrees= Entree::get();
        $affectations= Affectation::get();
        $categories= Category::get();
     
        return view('salle.show', compact('salles','materiels', 'entrees', 'affectations', 'categories'));
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
<<<<<<< HEAD
        $materiels= Materiel::get();
        $campuses= Campus::get();
        $entrees= Entree::get();
        $affectations= Affectation::get();
        $categories= Category::get();
        $salles= Salle::get();

        $salle= Salle::findOrFail($id);
        return view('salle.edit', compact('salles','salle', 'materiels', 'entrees', 'affectations', 'categories', 'campuses' ));
=======
        $salles= Salle::findOrFail($id);
        $materiels= Materiel::get();
        $entrees= Entree::get();
        $affectations= Affectation::get();
        $categories= Category::get();
        $campuses= Campus::get();

        $salle= Salle::findOrFail($id);
        return view('salle.edit', compact('salles','materiels', 'campuses', 'entrees', 'affectations', 'categories'));
>>>>>>> 3e33f2a (update de index et show)
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
<<<<<<< HEAD
        'intitule'=> 'required',
         'campus_id'=> 'required',
=======
        'numeroSalle'=> 'required',
        'campus_id'=> 'required',
>>>>>>> 3e33f2a (update de index et show)

    ]);
    $salles= Salle::get();
    $salle= Salle::find($id);
<<<<<<< HEAD
    $salle->intitule= $request->intitule;

    $salle->campus_id= $request->campus;
=======
    $salle->numeroSalle= $request->numeroSalle;
    $salle->campus_id= $request->campus_id;
>>>>>>> 3e33f2a (update de index et show)
    $salle->save();

    //redirection dans la page index contenant les salles apres modification de la salle accompagner d'un message de confirmation

<<<<<<< HEAD
    return redirect()->route('salle.index', compact('salles'))->with('sucess', 'Modification Mffectuer Avec Succes');
=======
    return redirect()->route('salle.index')->with('sucess', 'Modification Effectuer Avec Succes');
>>>>>>> 3e33f2a (update de index et show)
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
