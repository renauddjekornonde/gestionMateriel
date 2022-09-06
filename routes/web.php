<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcceuilController;

use App\Http\Controllers\MaterielController;

use App\Http\Controllers\CampusController;

use App\Http\Controllers\FournisseurController;

use App\Http\Controllers\SalleController;

use App\Http\Controllers\CategoryController;

use App\Http\Controllers\AffectationController;

use App\Http\Controllers\EntreeController;

use App\Http\Controllers\OperationController;

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

Route::get('/home', [AcceuilController::class, 'index'] );
Route::get('/materiel/index', [MaterielController::class, 'index'] );

// Route::get('/materiel/index', [FournisseurController::class, 'index'] );

Route::get('/campus/index', [CampusController::class, 'index'] );
Route::get('/fournisseur/index', [FournisseurController::class, 'index'] );
Route::get('/category/index', [CategoryController::class, 'index'] );
Route::get('/salle/index', [SalleController::class, 'index'] );
Route::get('/entree/index', [EntreeController::class, 'index'] );
Route::get('/affectation/index', [AffectationController::class, 'index'] );
Route::get('/opeartion/index', [OperationController::class, 'index'] );

Route::resource('materiel', MaterielController::class);

Route::resource('category', CategoryController::class);


