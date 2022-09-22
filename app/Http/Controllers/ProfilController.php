<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Affectation;
use App\Models\Category;
use App\Models\Entree;
use App\Models\Fournisseur;
use App\Models\Materiel;
use App\Models\Operation;
use App\Models\Salle;
use App\Models\Campus;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;



class ProfilController extends Controller
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
        $salles= Salle::get();
        $campuses= Campus::get();
        // dd($salles);
        // $operations= Operation::with('materiel')->where('typeOperation','0')->get();
        
        return view('/profil', compact('affectations', 'entrees', 'categories','fournisseurs', 'campuses', 'salles', 'materiels' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories= Category::select()->inRandomOrder('created_at')->Limit(2)->get();
        $fournisseurs= Fournisseur::select()->inRandomOrder('created_at')->Limit(2)->get();
        $materiels= Materiel::select()->inRandomOrder('created_at')->Limit(2)->get();
        $entrees= Entree::get();
        $affectations= Affectation::get();

    
        return view('profil', compact('fournisseurs', 'materiels','categories', 'entrees', 'affectations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories= Category::select()->inRandomOrder('created_at')->Limit(2)->get();
        $fournisseurs= Fournisseur::select()->inRandomOrder('created_at')->Limit(2)->get();
        $materiels= Materiel::select()->inRandomOrder('created_at')->Limit(2)->get();
        $entrees= Entree::get();
        $affectations= Affectation::get();

    
        return view('profil.edit', compact('fournisseurs', 'materiels','categories', 'entrees', 'affectations'));
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
            'password'=> 'required',

        ]);

        $user= User::find($id);
        $user->password= Hash::make($request->password);
        $user->save();

        //redirection dans la page index contenant les affectations apres modification de l'affectation accompagner d'un message de confirmation

        return view('profil')->with('sucess', 'Modification effectuer avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
