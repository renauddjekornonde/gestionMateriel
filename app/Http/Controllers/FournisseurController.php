<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fournisseur;

class FournisseurController extends Controller
{
     //cette fonction permet de recuperer tous les fournisseurs et les retourner
     public function index(){
        $fournisseurs= Fournisseur::get();
        return view('fournisseur.index', compact('fournisseurs'));
    }

    //cette fonction permet d'ajouter un fournisseur
    public function addNewFournisseur(Request $request)
    {
        $data = $request->all();
        $fournisseur = new Fournisseur();
        $fournisseur->nom = $data['nom'];
        $fournisseur->prenom = $data['prenom'];
        $fournisseur->boutique = $data['boutique'];
        $fournisseur->created_at = $data['created_at'];
        $fournisseur->updated_at = $data['updated_at'];
        $fournisseur->save();
        return redirect()->back();
    }

    //cette fonction permet de modifier les fournisseurs
    public function update(Request $request, $id)
    {

        //cette requete oblige à ne pas laisser les champs vides
        $request->validate([
            'nom'=> 'required',
            'prenom'=> 'required',
            'boutique'=> 'required',
            'created_at'=> 'required',
            'updated_at'=> 'required',

        ]);

        $fournisseur= Fournisseur::find($id);
        $fournisseur->nom= $request->nom;
        $fournisseur->prenom= $request->prenom;
        $fournisseur->boutique= $request->boutique;
        $fournisseur->created_at= $request->created_at;
        $fournisseur->updated_at= $request->updated_at;
        $fournisseur->save();

        //redirection dans la page index contenant les coordonnées du fournisseurs apres modification et accompagner d'un message de confirmation

        return redirect()->route('fournisseur.index')->with('sucess', 'Modification Effectuer Avec Succes');
    }

    //Fonction permettant de supprimer une affectation
     public function destroy($id)
    {
        Fournisseur::find($id)->delete();

        //retourne la liste des fournisseurs avec une message de confirmation de la suppression

        return redirect()->route('fournisseur.index')->with('sucess', 'Supprimer');
    }
}
