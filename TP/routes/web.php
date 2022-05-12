<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\VoitureController;
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

Route::get('/', function () {
    return view('Stream.index');
});



Route::get("/Etudiant",[EtudiantController::class,"index"])->name("Etudiantindex");

Route::get("/EtudiantForm",[EtudiantController::class,"FormEtudiant"])->name("FormEtudiant");

Route::post('/EtudiantForm',[EtudiantController::class,"AjoutEtudiant"])->name("AjoutEtudiant");

Route::get('/EtudiantModifier',[EtudiantController::class,"ModificationEtudiant"])->name("ModifierEtudiant");


Route::post('/ModifEtudiant',[EtudiantController::class,"ModifEtudiant"])->name("ModifEtudiant");

Route::get('/SupprimerEtudiant',[EtudiantController::class,"supprimerEtudiant"])->name("SupprimerEtudiant");


Route::get('/VoitureIndex',[VoitureController::class,"index"])->name("VoitureIndex");

Route::get("/Movies",[MoviesController::class,"movies"])->name("Movies");
Route::get("/index",[MoviesController::class,"index"])->name("index");
Route::get("/tvshow",[MoviesController::class,"tvshow"])->name("tvshow");
Route::get("/videos",[MoviesController::class,"videos"])->name("videos");
Route::get("/blog",[MoviesController::class,"blog"])->name("blog");
Route::get("/blogdetails",[MoviesController::class,"blogdetail"])->name("blogdetails");