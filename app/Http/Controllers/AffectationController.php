<?php

namespace App\Http\Controllers;

use App\Models\Affectation;
use App\Models\Category;
use App\Models\Entree;
use App\Models\Fournisseur;
use App\Models\Materiel;
use App\Models\Campus;
use App\Models\Operation;
use Session;
use App\Models\Salle;
use Illuminate\Http\Request;

class AffectationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //cette fonction permet de recuperer toutes les affectations et les retourner
    public function index()
    {
        $entrees= Entree::get();
        $categories= Category::get();
        $affectations= Affectation::with('salle')->get();
        $materiels= Materiel::get();
        $fournisseurs= Fournisseur::get();
        $salles= Salle::get();
        $operations= Operation::with('materiel')->where('typeOperation','0')->get();
        // dd($operations);
        $campuses= Campus::get();
        return view('affectation.index', compact('affectations', 'entrees', 'categories','fournisseurs', 'campuses', 'salles', 'operations', 'materiels' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // cette function nous renvoie à la page ou se trouve le formulaire d'ajout
    public function create()
    {
        
        $materiels= Materiel::get();
        $entrees= Entree::get();
        $affectations= Affectation::get();
        $categories= Category::get();
        $salles= Salle::get();
        $campuses= Campus::get();
        return view('affectation.create', compact('affectations', 'entrees', 'categories', 'materiels','salles', 'campuses' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        //cette fonction permet d'ajouter une affectation
    public function store(Request $request)
    {
        

        $fournisseurs= Fournisseur::get();
        $entrees= Entree::get();  
        $materiels= Materiel::get();
        $affectations= Affectation::get();
        $categories= Category::get();

        $data = $request->all();
        $newAffectation= Affectation::create([
            'salle_id'=>$data['salle']
        ]);

       
           $datas = $request->all();
       
         
        for($i=0; $i< count($datas['materiel_id']); $i++){

            // echo $i;
            $operation = new Operation();
           $operation->typeOperation = 0;

          $operation->affectation_id = $newAffectation->id;
          $operation->materiel_id = $datas['materiel_id'][$i];
          $operation->quantite = $datas['quantite'][$i];
    //   dd($operation);
          $operation->save();
        }

      

        return redirect()->route('affectation.index',  compact('materiels', 'entrees', 'affectations', 'categories', 'fournisseurs'))->with('sucess', 'Materiel ajoute avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //Cette fonction permet de voir une affectation en detaille
    public function show($id)
    {
        $affectations= Affectation::findOrFail($id);
        $entrees= Entree::get();
        $salles= Salle::get();
        $affectation= Affectation::get();
        $categories=Category::get();
        $materiels=Materiel::get();
        $fournisseurs= Fournisseur::get();
        $operations= Operation::with('materiel')->where('affectation_id', "$affectations->id")->get();
        return view('affectation.show', compact('affectation', 'affectations','entrees', 'categories', 'materiels','fournisseurs', 'salles', 'operations'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //  cette fonction permet de renvoyer la page ou se trouve le formulaire d'ffectation
    public function edit($id)
    {
        $affectations= Affectation::findOrFail($id);
        $affectation= Affectation::get();
        $entrees= Entree::get();
        $salles= Salle::get();
        $categories=Category::get();
        $materiels=Materiel::get();
        $operations= Operation::with('materiel')->where('typeOperation','0')->get();
         return view('affectation.edit', compact('affectations','affectation',   'entrees', 'categories', 'materiels', 'salles', 'operations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // cette fontion permet de modifier les affecations
    public function update(Request $request, $id)
    {

        //cette requete oblige à ne pas laisser les champs vides
        $request->validate([
            'salle_id'=> 'required',
        ]);
        
        $salles= Salle::get();
        $affectation= Affectation::find($id);
        $affectation->salle_id= $request->salle_id;
        $affectation->save();

        //redirection dans la page index contenant les affectations apres modification de l'affectation accompagner d'un message de confirmation

        return redirect()->route('affectation.index', compact('salles'))->with('sucess', 'Modification effectuer avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //Fonction permettant de supprimer une affectation
    public function destroy($id)
    {
        Affectation::find($id)->delete();

        //retourne la liste des affectations avec une message de confirmation de la suppression

        return redirect()->route('affectation.index')->with('sucess', 'Supprimer');
    }
}
