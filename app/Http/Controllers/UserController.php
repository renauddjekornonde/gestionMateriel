<?php
namespace App\Http\Controllers;
use App\Models\Affectation;
use App\Models\Materiel;
use App\Models\Category;
use App\Models\User;
use App\Models\Entree;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::get();
        $materiels= Materiel::get();
        $entrees= Entree::get();
        $affectations= Affectation::get();
        $categories= Category::get();
     
        return view('user.index', compact('users','materiels', 'entrees', 'affectations', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users= User::get();
        $entrees= Entree::get();
        $affectations= Affectation::get();
        $categories= Category::get();
        $materiels= Materiel::get();
        
        return view('user.create', compact('materiels', 'entrees', 'affectations', 'categories', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users= User::get();
        $entrees= Entree::get();
        $affectations= Affectation::get();
        $categories= Category::get();
        $materiels= Materiel::get();

        $data = $request->all();
        $user = new User();
        $user->nom = $data['nom'];
        $user->prenom = $data['prenom'];
        $user->telephone = $data['telephone'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->role = $data['role'];

       
        $user->save();

        return redirect()->route('user.index')->with('sucess', 'User ajoute avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users= User::findOrFail($id);
        $entrees= Entree::get();
        $affectations= Affectation::get();
        $categories= Category::get();
        $materiels= Materiel::get();
        return view('user.show', compact('materiels', 'entrees', 'affectations', 'categories', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users= User::findOrFail($id);
        $entrees= Entree::get();
        $affectations= Affectation::get();
        $categories= Category::get();
        $materiels= Materiel::get();
        return view('user.edit', compact('materiels', 'entrees', 'affectations', 'categories', 'users'));
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
         

                  $user= User::find($id);
                  $user->nom= $request->nom;
                  $user->prenom= $request->prenom;
                  $user->telephone= $request->telephone;
                  $user->email= $request->email;
                  $user->save();
          
                  //redirection dans la page index contenant les materiels apres modification de données du materiel accompagner d'un message de confirmation
          
                  return redirect()->route('user.index')->with('sucess', 'Modification Effectuer Avec Succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        //retourne  la liste des materiels restant avec un message de confirmation de la suppression

        return redirect()->route('user.index')->with('sucess', 'Supprimer');
    }
}
