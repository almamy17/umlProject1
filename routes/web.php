<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthenticationController;

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
Route::get('/accueil',[PostController::class,'afficherAccueil'] )->name('home');
Route::get('/about', [PostController::class,'afficherAbout'])->name('about');
Route::get('/contact',[PostController::class,'afficherContact'])->name('contact');

Route::get('/commissions',[PostController::class,'afficherCommissions'])
    ->name('commissions');
    //->middleware('auth');


Route::get('/promotions',[PostController::class,'afficherPromotions'])
    ->name('promotions');
    //-middleware('auth');

Route::get('/activites',[PostController::class,'afficherActivites'])
    ->name('activites');
    //->middleware('auth');

// Definition de la route permettant de se connecter
Route::get('/login',[AuthenticationController::class,'afficherConnexion'])->name('login');

// Définition de la route permettant d'authentifier l'utilisateut avec ses informations
Route::post('/authenticate',[AuthenticationController::class,'connectUser'])->name('authenticate');

// La route de déconnexion
Route::get('/logout',[AuthenticationController::class,'disconnectUser'])->name('logout');

Route::get('/activites/contrat',[PostController::class,'afficherContrat'])
    ->name('contrat');
    //->middleware('auth');

Route::get('/activites/devis',[PostController::class,'afficherDevis'])
    ->name('devis');
    //->middleware('auth');

Route::get('/activites/sinistre',[PostController::class,'afficherSinistre'])
    ->name('sinistre');
    //->middleware('auth');
