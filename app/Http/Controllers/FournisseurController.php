<?php

namespace App\Http\Controllers;
use App\Models\Affectation;
use App\Models\Materiel;
use App\Models\Category;
use App\Models\Entree;
use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
       //cette fonction permet de recuperer tous les fournisseurs et les retourner
    public function index()
    {
        $fournisseurs= Fournisseur::get();
        $entrees= Entree::get();
        $categories= Category::get();
        $affectations= Affectation::get();
        $materiels= Materiel::get();
        return view('fournisseur.index', compact('fournisseurs', 'entrees', 'affectations', 'materiels', 'categories'));
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
        $categories= Category::get();
        $affectations= Affectation::get();
        $materiels= Materiel::get();
        return view('fournisseur.create', compact('fournisseurs', 'entrees', 'affectations', 'materiels', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //cette fonction permet d'ajouter un fournisseur
    public function store(Request $request)
    {
        $fournisseurs= Fournisseur::get();
        $entrees= Entree::get();
        $categories= Category::get();
        $affectations= Affectation::get();
        $materiels= Materiel::get();

        $data = $request->all();
        $fournisseur = new Fournisseur();
        $fournisseur->nom = $data['nom'];
        $fournisseur->prenom = $data['prenom'];
        $fournisseur->telephone = $data['telephone'];
        $fournisseur->boutique = $data['boutique'];
        // $fournisseur->created_at = $data['created_at'];
        // $fournisseur->updated_at = $data['updated_at'];
        $fournisseur->save();
        return view('fournisseur.index', compact('fournisseurs', 'entrees', 'affectations', 'materiels', 'categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Cette fonction permet de voir une fournisseur en detaille
    public function show($id)
    {
        $fournisseurs= Fournisseur::findOrFail($id);
        $entrees= Entree::get();
        $categories= Category::get();
        $affectations= Affectation::get();
        $materiels= Materiel::get();
        return view('fournisseur.show', compact('fournisseurs', 'entrees','categories', 'affectations','materiels'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      //Cette fonction permet de renvoyer la page d'edition d'une fournisseur
    public function edit($id)
    {
        $fournisseurs= Fournisseur::get();
        $entrees= Entree::get();
        $categories= Category::get();
        $affectations= Affectation::get();
        $materiels= Materiel::get();

        $fournisseurs= Fournisseur::findOrFail($id);
        return view('fournisseur.edit', compact('fournisseurs', 'entrees','categories', 'affectations','materiels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //cette fonction permet de modifier les fournisseurs
    public function update(Request $request, $id)
    {
       //cette requete oblige à ne pas laisser les champs vides
       $request->validate([
        'nom'=> 'required',
        'prenom'=> 'required',
        'boutique'=> 'required',
        // 'created_at'=> 'required',
        'telephone'=> 'required',

    ]);
    $fournisseurs= Fournisseur::get();
    $entrees= Entree::get();
    $categories= Category::get();
    $affectations= Affectation::get();
    $materiels= Materiel::get();

    $fournisseur= Fournisseur::find($id);
    $fournisseur->nom= $request->nom;
    $fournisseur->prenom= $request->prenom;
    $fournisseur->telephone= $request->telephone;
    $fournisseur->boutique= $request->boutique;
    // $fournisseur->created_at= $request->created_at;
    // $fournisseur->updated_at= $request->updated_at;
    $fournisseur->save();

    //redirection dans la page index contenant les coordonnées du fournisseurs apres modification et accompagner d'un message de confirmation

    return redirect()->route('fournisseur.index', compact('fournisseurs', 'entrees','categories', 'affectations','materiels'))->with('sucess', 'Modification Effectuer Avec Succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        //Fonction permettant de supprimer un fournisseur
    public function destroy($id)
    {
        Fournisseur::find($id)->delete();

        //retourne la liste des fournisseurs avec une message de confirmation de la suppression

        return redirect()->route('fournisseur.index')->with('sucess', 'Supprimer');
    }
}
