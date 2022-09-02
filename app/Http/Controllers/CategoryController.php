<?php

namespace App\Http\Controllers;

use App\Models\Campus;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
     //cette fonction permet de recuperer tous les category et les retourner
     public function index(){
        $categories= Category::get();
        return view('category.index', compact('categories'));
    }

    //cette fonction permet d'ajouter une categorie
    public function addNewCategory(Request $request)
    {
        $data = $request->all();
        $category = new Category();
        $category->intitule = $data['intitule'];
        $category->created_at = $data['created_at'];
        $category->updated_at = $data['updated_at'];
        $category->save();
        return redirect()->back();
    }

    //cette fonction permet de modifier les données d'une categorie
    public function update(Request $request, $id)
    {

        //cette requete oblige à ne pas laisser les champs vides
        $request->validate([
            'intitule'=> 'required',
            'created_at'=> 'required',
            'updated_at'=> 'required',

        ]);

        $category= Category::find($id);
        $category->intitule= $request->intitule;
        $category->created_at= $request->created_at;
        $category->updated_at= $request->updated_at;
        $category->save();

        //redirection dans la page index contenant les categories apres la modification et accompagner d'un message de confirmation

        return redirect()->route('category.index')->with('sucess', 'Modification effectuer avec succes');
    }

    //Fonction permettant de supprimer une categorie
     public function destroy($id)
    {
        Category::find($id)->delete();

        //retourne la liste des categorie avec une message de confirmation de la suppression

        return redirect()->route('category.index')->with('sucess', 'Supprimer');
    }
}
