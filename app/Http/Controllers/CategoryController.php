<?php

namespace App\Http\Controllers;
use App\Models\Affectation;
use App\Models\Materiel;
use App\Models\Entree;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
         //cette fonction permet de recuperer tous les category et les retourner
    public function index()
    {
        $categories= Category::get();
        $materiels= Materiel::get();
        $entrees= Entree::get();
        $affectations= Affectation::get();
        return view('category.index', compact('categories', 'materiels', 'entrees', 'affectations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
            // cette function nous renvoie à la page ou se trouve le formulaire d'ajout

    public function create()
    {
        $categories= Category::get();
        $materiels= Materiel::get();
        $entrees= Entree::get();
        $affectations= Affectation::get();

        return view('category.create', compact('categories', 'materiels', 'entrees', 'affectations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //cette fonction permet d'ajouter une categorie
    public function store(Request $request)
    {
        $materiels= Materiel::get();
        $entrees= Entree::get();
        $affectations= Affectation::get();
        $categories= Category::get();
     
        $data = $request->all();
        $category = new Category();
        $category->intitule = $data['intitule'];
        // $category->created_at = $data['created_at'];
        // $category->updated_at = $data['updated_at'];
        $category->save();
        return redirect()->route('category.index',  compact('materiels', 'entrees', 'affectations', 'categories'))->with('sucess', 'Category ajoute avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Cette fonction permet de voir une category en detaille
    public function show($id)
    {
        $categories= Category::findOrFail($id);
        $materiels= Materiel::get();
        $entrees= Entree::get();
        $affectations= Affectation::get();

        return view('category.show', compact('categories', 'materiels', 'entrees', 'affectations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories= Category::findOrFail($id);
        $materiels= Materiel::get();
        $entrees= Entree::get();
        $affectations= Affectation::get();

        $categories= Category::findOrFail($id);
        return view('category.edit', compact('categories', 'materiels', 'entrees', 'affectations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        //cette fonction permet de modifier les données d'une categorie
    public function update(Request $request, $id)
    {
        //cette requete oblige à ne pas laisser les champs vides
        $request->validate([
            'intitule'=> 'required',
            // 'created_at'=> 'required',
            // 'updated_at'=> 'required',

        ]);

        $category= Category::find($id);
        $category->intitule= $request->intitule;
        // $category->created_at= $request->created_at;
        // $category->updated_at= $request->updated_at;
        $category->save();

        //redirection dans la page index contenant les categories apres la modification et accompagner d'un message de confirmation

        return redirect()->route('category.index')->with('sucess', 'Modification effectuer avec succes');
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

        Category::find($id)->delete();

        //retourne la liste des categorie avec une message de confirmation de la suppression

        return redirect()->route('category.index')->with('sucess', 'Supprimer');
    }
}
