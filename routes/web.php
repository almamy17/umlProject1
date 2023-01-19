<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreController;
use App\Http\Controllers\PostController;

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
Route::get('/commissions',[PostController::class,'afficherCommissions'])->name('commissions');
Route::get('/promotions',[PostController::class,'afficherPromotions'])->name('promotions');
Route::get('/activites',[PostController::class,'afficherActivites'])->name('activites');
Route::get('/login',[PostController::class,'afficherConnexion'])->name('login');
Route::get('/activites/contrat',[PostController::class,'afficherContrat'])->name('contrat');
Route::get('/activites/devis',[PostController::class,'afficherDevis'])->name('devis');
Route::get('/activites/sinistre',[PostController::class,'afficherSinistre'])->name('sinistre');
