<?php

namespace App\Http\Controllers;
use App\Models\Affectation;
use App\Models\Category;
use App\Models\Entree;
use App\Models\Fournisseur;
use App\Models\Materiel;
use App\Models\Salle;
use Illuminate\Http\Request;

class GerantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrees= Entree::get();
        $categories= Category::get();
        $affectations= Affectation::get();
        $materiels= Materiel::get();
        $fournisseurs= Fournisseur::get();
        return view('gerant.index', compact('affectations', 'entrees', 'categories', 'materiels','fournisseurs' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $affectations= Affectation::findOrFail($id);
        $entrees= Entree::get();
        $salles= Salle::get();
        $affectation= Affectation::get();
        $categories=Category::get();
        $materiels=Materiel::get();
        $fournisseurs= Fournisseur::get();
        return view('gerant.show', compact('affectation', 'affectations','entrees', 'categories', 'materiels','fournisseurs', 'salles'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $affectations= Affectation::findOrFail($id);
        $affectation= Affectation::get();
        $entrees= Entree::get();
        $salles= Salle::get();
        $categories=Category::get();
        $materiels=Materiel::get();
         return view('gerant.edit', compact('affectations','affectation',   'entrees', 'categories', 'materiels', 'salles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //cette requete oblige à ne pas laisser les champs vides
        $request->validate([
            // 'created_at'=> 'required',
            // 'updated_at'=> 'required',
            'salle_id'=> 'required',

        ]);
        $salles= Salle::get();
        $affectation= Affectation::find($id);
        // $affectation->created_at= $request->created_at;
        // $affectation->updated_at= $request->updated_at;
        $affectation->salle_id= $request->salle_id;
        $affectation->save();

        //redirection dans la page index contenant les affectations apres modification de l'affectation accompagner d'un message de confirmation

        return redirect()->route('gerant.index', compact('salles'))->with('sucess', 'Modification effectuer avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        
    }
}
