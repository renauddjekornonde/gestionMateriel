<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Affectation;
use Illuminate\Http\Request;
use App\Models\Materiel;
use App\Models\Fournisseur;
use App\Models\Operation;
use App\Models\Category;
use App\Models\Entree;
use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Hash;
use Session;

class AcceuilController extends Controller
{
    //le controller retourne la vue de notre page d'accueil home
    public function index()
    {
        $categories= Category::select()->inRandomOrder('created_at')->Limit(2)->get();
        $fournisseurs= Fournisseur::select()->inRandomOrder('created_at')->Limit(2)->get();
        $materiels= Materiel::select()->inRandomOrder('created_at')->Limit(2)->get();
        $entrees= Entree::get();
        $affectations= Affectation::get();

        // $operations= Operation::with('materiel')->get();
        // dd($operations);
        return view('home', compact('fournisseurs', 'materiels','categories', 'entrees', 'affectations'));
    }
    public function profil()
    {
        
        $categories= Category::select()->inRandomOrder('created_at')->Limit(2)->get();
        $fournisseurs= Fournisseur::select()->inRandomOrder('created_at')->Limit(2)->get();
        $materiels= Materiel::select()->inRandomOrder('created_at')->Limit(2)->get();
        $entrees= Entree::get();
        $affectations= Affectation::get();

    
        return view('profil', compact('fournisseurs', 'materiels','categories', 'entrees', 'affectations'));
    }

     function indexe()
     {
         $categories= Category::get();
         $fournisseurs= Fournisseur::get();
         $materiels= Materiel::get();
         $entrees= Entree::get();
         $affectations= Affectation::get();

         return view('auth.login', compact('fournisseurs', 'materiels','categories', 'entrees', 'affectations'));
     }

     function validate_login(Request $request)
     {
         $categories= Category::select()->inRandomOrder('created_at')->Limit(2)->get();
         $fournisseurs= Fournisseur::select()->inRandomOrder('created_at')->Limit(2)->get();
         $materiels= Materiel::select()->inRandomOrder('created_at')->Limit(2)->get();
         $entrees= Entree::select()->inRandomOrder('created_at')->Limit(2)->get();
         $affectations= Affectation::select()->inRandomOrder('created_at')->Limit(2)->get();
         $operations= Operation::with('materiel')->where('typeOperation','0')->get();

         $request->validate([
             'email' =>'required',
             'password' => 'required',
         ]);

         $credentials= $request->only('email', 'password');
        
         if(Auth::attempt($credentials))
        {
            if(Auth::user()->role == 'Administrateur')
             {
                 return view('/home', compact('fournisseurs', 'materiels','categories', 'entrees', 'affectations', 'operations'));
             }
             else if(Auth::user()->role == 'Gerant')
             {
                return view('gerant.index', compact('fournisseurs', 'materiels','categories', 'entrees', 'affectations', 'operations'))->with('sucess','Bienvenue');
             }
        }
         else
        {
              return view('auth.login')->with('sucess', 'Authentification non valide');
        }  
     }

      function home()
      {
         $categories= Category::select()->inRandomOrder('created_at')->Limit(2)->get();
         $fournisseurs= Fournisseur::select()->inRandomOrder('created_at')->Limit(2)->get();
         $materiels= Materiel::select()->inRandomOrder('created_at')->Limit(2)->get();
         $entrees= Entree::select()->inRandomOrder('created_at')->Limit(2)->get();
         $affectations= Affectation::select()->inRandomOrder('created_at')->Limit(2)->get();

        if(Auth::check())
        {
            if(Auth::user()->role == 'Administrateur')
             {
              return view('/home', compact('fournisseurs', 'materiels','categories', 'entrees', 'affectations'));
             }
             else if(Auth::user()->role == 'Gerant')
             {
                return view('gerant.index')->with('sucess','Bienvenue');
             }
        }
        else
        {
            return view('auth.login')->with('Vous n\'etes pas autoriser à acceder à cette page' );
        }
    }

     function logout()
     {
         Session::flush();

         Auth::logout();

         return Redirect('');
     }

            //cette requete oblige à ne pas laisser les champs vides
         
            public function update(Request $request, $id)
            {
            $profil= User::find($id);
            $profil->password= $request->password;
            $profil->save();
    
            //redirection dans la page index contenant les materiels apres modification de données du materiel accompagner d'un message de confirmation
    
            return view('profil')->with('sucess', 'Modification Effectuer Avec Succes');
        }

        public function search()
    {
        $entrees= Entree::get();
        $categories= Category::get();
        $affectations= Affectation::get();
        $fournisseurs= Fournisseur::get();
        $q= request()->input('q');

        $materiels= Materiel::where('intitule', 'like', "%$q%")
                ->orwhere('description', 'like', "%$q%")
                ->paginate(6);

                return view('products.search', compact('fournisseurs', 'categories', 'entrees', 'affectations'))->with('materiels', $materiels);

    }

        public function searchGerant()
    {
        $entrees= Entree::get();
        $categories= Category::get();
        $affectations= Affectation::get();
        $fournisseurs= Fournisseur::get();
        $q= request()->input('q');

        $operations= Operation::with('materiel')->where('typeOperation','0')
                ->orwhere('intitule', 'like', "%$q%")
                ->paginate(6);

                return view('products.search', compact('fournisseurs', 'categories', 'entrees', 'affectations'))->with('materiels', $operations);

    }



    //      /**
    //  * Where to redirect users after login.
    //  *
    //  * @var string
    //  */
    // // protected $redirectTo = RouteServiceProvider::HOME;
    // public function authenticated(){
    //     if(Auth::user()->role == 'Administrateur') // admin
    //     {
    //         return view('home')->with('sucess','Bienvenue Admin');
    //     }
    //     else if(Auth::user()->role == 'Gerant') //gerant
    //     {
    //         return view('gerant.index')->with('sucess','Bienvenue');
    //     }
    //     else
    //     {
    //         return view('auth.login');
    //     }
    // }

    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    // public function logout()
    // {
    //     auth()->logout();
    //     return view('auth.login');
    // }

    

}
