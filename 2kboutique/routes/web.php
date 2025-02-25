<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Exceptions\PostTooLargeException;
//use Illuminate\Routing\AbstractRouteCollection;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});

Route::get('/admin/ajoutProduit', function () {
    return view('admin/ajoutProduit');
});

Route::post('/inscription', [AuthController::class, 'inscription'])->name('inscription');
Route::post('/connexion', [AuthController::class, 'connexion'])->name('connexion');
Route::get('/deconnexion', [AuthController::class, 'deconnexion'])->name('deconnexion');
Route::delete('/delete-account', [AuthController::class, 'deleteAccount'])->name('delete.account')->middleware('auth');


//admin
// Traiter le formulaire (POST)
Route::post('/admin/ajoutProduit', [ProduitController::class, 'ajoutProduit'])->name('admin.ajoutProduit');

// Afficher le formulaire (GET)
Route::get('/admin/ajoutProduit', [ProduitController::class, 'affichFormProduit'])->name('admin.formAjoutProduit');

