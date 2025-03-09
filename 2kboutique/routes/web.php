<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\DetailProduitController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\AdministrateurController;
use Illuminate\Support\Facades\Route;

// Toutes les routes sont placées dans le middleware `web`
Route::middleware(['web'])->group(function () {

    // PARTIE UTILISATEUR
    Route::get('/', [ProduitController::class, 'index'])->name('index');
    Route::get('/products_femme', [ProduitController::class, 'vetementFemme'])->name('vetements.femme');
    Route::get('/products_homme', [ProduitController::class, 'vetementHomme'])->name('vetements.homme');
    Route::get('/products', [ProduitController::class, 'allVetements'])->name('all.vetements');
    Route::get('/products_details/{id}', [DetailProduitController::class, 'detailProduit'])->name('produits.details');

    // Routes d'authentification
    Route::match(['get', 'post'], '/inscription', [AuthController::class, 'inscription'])->name('inscription');
    Route::post('/connexion', [AuthController::class, 'connexion'])->name('connexion');
    Route::post('/deconnexion', [AuthController::class, 'deconnexion'])->name('deconnexion');
    Route::delete('/delete-account', [AuthController::class, 'deleteAccount'])->name('delete.account')->middleware('auth');

    // Routes utilisateur
    Route::get('/account', fn() => view('user.account'))->name('account');
    Route::get('/cart', fn() => view('user.cart'));
    Route::get('/consulter_commande', fn() => view('user.consulter_commande'));
    Route::get('/historique_commandes', fn() => view('user.historique_commandes'));
    Route::get('/suivie_commande', fn() => view('user.suivie_commande'));

    // PARTIE ADMIN
    Route::get('/admin', [AdministrateurController::class, 'home_Admin'])->name('admin');

    // Gestion des produits (Admin)
    Route::post('/admin/produit/ajoutProduit', [ProduitController::class, 'ajoutProduit'])->name('admin.ajoutProduit');
    Route::get('/admin/produit/ajoutProduit', [ProduitController::class, 'affichFormProduit'])->name('admin.formAjoutProduit');
    Route::get('/admin/produit/listeProduit', [ProduitController::class, 'listeAllProduit'])->name('admin.listeProduit');

    // Gestion des utilisateurs (Admin)
    Route::get('/admin/user/ajoutUser', [UtilisateurController::class, 'ajoutUser'])->name('admin.ajoutUser');
    Route::get('/admin/user/listeUser', [UtilisateurController::class, 'listeAllUser'])->name('admin.listeUser');

});
