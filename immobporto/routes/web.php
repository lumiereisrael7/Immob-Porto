<?php

use App\Http\Controllers\InscriptionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnexionController;


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
    return view('welcome');
})->name('accueil');

Route::get('achat', function () {
    return view('achat');
})->name('achat');

Route::get('location', function () {
    return view('location');
})->name('location');

Route::get('presentation', function () {
    return view('presentation');
})->name('presentation');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('/inscription', function () {
    return view('inscription');
})->name('inscription');

Route::get('/inscription', [App\Http\Controllers\InscriptionController::class, 'formulaire'])->name('inscription');

Route::post('/inscription', [App\Http\Controllers\InscriptionController::class, 'traitement']);

Route::get('/connexion', [App\Http\Controllers\ConnexionController::class, 'formulaire'])->name('connexion');

Route::post('/connexion', [App\Http\Controllers\ConnexionController::class, 'traitement']);

//Route::get('/contact', [App\Http\Controllers\ContactController::class, 'formulaire'])->name('contact');

//Route::post('/contact', [App\Http\Controllers\ContactController::class, 'traitement']);

Route::get('/connexion', [App\Http\Controllers\ConnexionController::class, 'formulaire']);

Route::get('/mon-compte', [App\Http\Controllers\CompteController::class, 'accueil'])->name('mon-compte');

//Route::resource('/mon-compte', 'App\Http\Controllers\CompteController');

Route::get('/deconnexion', [App\Http\Controllers\CompteController::class, 'deconnexion']);
