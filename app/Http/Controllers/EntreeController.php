<?php

namespace App\Http\Controllers;
use App\Models\Affectation;
use App\Models\Materiel;
use App\Models\Category;
use App\Models\Fournisseur;
use App\Models\Entree;
use App\Models\Operation;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EntreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //cette fonction permet de recuperer toutes les Entree et les retourner
    public function index()
    {
        
        $entrees= Entree::get();
        $materiels= Materiel::get();
        $affectations= Affectation::get();
        $categories= Category::get();
        $operations= Operation::with('materiel')->where('typeOperation','1')->get();
        return view('entree.index', compact('entrees', 'materiels', 'affectations', 'categories', 'operations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // cette function nous renvoie à la page ou se trouve le formulaire d'ajout
    public function create()
    {
        $fournisseurs= Fournisseur::get();
        $entrees= Entree::get();  
        $materiels= Materiel::get();
        $affectations= Affectation::get();
        $categories= Category::get();
        return view('entree.create', compact('entrees', 'materiels', 'affectations', 'categories', 'fournisseurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     //cette fonction permet d'ajouter une entree
    public function store(Request $request)
    {
        

        $fournisseurs= Fournisseur::get();
        $entrees= Entree::get();  
        $materiels= Materiel::get();
        $affectations= Affectation::get();
        $categories= Category::get();

        $data = $request->all();
        $newEntree= Entree::create([
            'fournisseur_id'=>$data['fournisseur'],
        ]);


           $datas = $request->all();
           
        for($i=0; $i< count($datas['materiel_id']); $i++){
            $operation = new Operation();
         
            $operation->typeOperation = 1;

            $operation->entree_id = $newEntree->id;
            $operation->materiel_id = $datas['materiel_id'][$i];
            $operation->quantite = $datas['quantite'][$i];
          $operation->save();
    }

      

        return redirect()->route('entree.index',  compact('materiels', 'entrees', 'affectations', 'categories', 'fournisseurs'))->with('sucess', 'Materiel ajoute avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //Cette fonction permet de voir une entree en detaille
    public function show($id)
    {
        $entrees= Entree::findOrFail($id);
       dd($entrees);
        $materiels= Materiel::get();
        $affectations= Affectation::get();
        $categories= Category::get();
        $operations= Operation::with('materiel')->where('typeOperation','1')->get();
    
        return view('entree.show', compact('entrees', 'materiels', 'affectations', 'categories', 'operations'));
    }

    public function test_show($id)
    {
        echo "bonjour";
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        //Cette fonction permet de renvoyer la page d'edition d'une entree
    public function edit($id)
    {
        $fournisseurs= Fournisseur::get();
        $materiels= Materiel::get();
        $affectations= Affectation::get();
        $categories= Category::get();
        $entrees= Entree::findOrFail($id);
        $operations= Operation::with('materiel')->where('typeOperation','1')->get();
        return view('entree.edit', compact('entrees', 'materiels', 'affectations', 'categories', 'fournisseurs', 'operations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //cette fonction permet de modifier les entrees
    public function update(Request $request, $id)
    {
         //cette requete oblige à ne pas laisser les champs vides
         $request->validate([
            // 'matricule'=> 'required',
            // 'created_at'=> 'required',
            // 'updated_at'=> 'required',


        ]);

        $entree= Entree::find($id);
        // $entree->matricule= $request->matricule;
        $entree->fournisseur_id = $request->fournisseur;
        // $entree->created_at= $request->created_at;
        // $entree->updated_at= $request->updated_at;
        $entree->save();

        //redirection dans la page index contenant les entrees apres modification de l'entree accompagner d'un message de confirmation

        return redirect()->route('entree.index')->with('sucess', 'Modification Effectuer Avec Succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //Fonction permettant de supprimer une categorie
    public function destroy($id)
    {
        Entree::find($id)->delete();

        //retourne la liste des entrees avec une message de confirmation de la suppression

        return redirect()->route('entree.index')->with('sucess', 'Supprimer');
    }
}
