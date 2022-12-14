<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AcceuilController;

use App\Http\Controllers\MaterielController;

use App\Http\Controllers\CampusController;

use App\Http\Controllers\FournisseurController;

use App\Http\Controllers\SalleController;

use App\Http\Controllers\CategoryController;

use App\Http\Controllers\AffectationController;
use App\Http\Controllers\GerantController;
use App\Http\Controllers\EntreeController;

use App\Http\Controllers\OperationController;
use App\Http\Controllers\HistoriqueController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Auth::routes();


Route::controller(AcceuilController::class)->group(function(){

    Route::get('/', 'indexe')->name('login');

    Route::get('logout', 'logout')->name('logout');

    Route::post('validate_login', 'validate_login')->name('auth.validate_login');

    Route::get('/home', 'home')->name('home');
});

Route::prefix('')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('/home', [AcceuilController::class, 'index'] );
    Route::get('/materiel/index', [MaterielController::class, 'index'] );
    
    Route::get('/campus/index', [CampusController::class, 'index'] );
    Route::get('/fournisseur/index', [FournisseurController::class, 'index'] );
    Route::get('/category/index', [CategoryController::class, 'index'] );
    Route::get('/salle/index', [SalleController::class, 'index'] );
    Route::get('/entree/index', [EntreeController::class, 'index'] );
    //Route::get('/test_entrees/detail/{id}', [EntreeController::class, 'show'] )->name('entree.detail');
    Route::get('/affectation/index', [AffectationController::class, 'index'] );
    Route::get('/opeartion/index', [OperationController::class, 'index'] );
    Route::get('/user/index', [UserController::class, 'index'] );
    Route::get('/profil', [AcceuilController::class, 'profil'] );
    Route::get('/historique/index', [HistoriqueController::class, 'index'] )->name('historique.index');

    Route::get('/search', [AcceuilController::class, 'search'] )->name('products.search');
    
    Route::get('/searchGerant', [AcceuilController::class, 'searchGerant'] )->name('productsGerant.search');
    
    Route::resource('materiel', MaterielController::class);
   
    
    Route::resource('category', CategoryController::class);
    
    Route::resource('campus', CampusController::class);
    
    Route::resource('salle', SalleController::class);
    
    Route::resource('entree', EntreeController::class);
    
    Route::resource('fournisseur', FournisseurController::class);
    
    Route::resource('affectation', AffectationController::class);
    
    
    Route::resource('operation', OperationController::class);
    
    Route::resource('user', UserController::class);

    Route::resource('gerant', GerantController::class);

    Route::resource('profil', ProfilController::class);
});


