<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommandeController;
use Illuminate\Support\Facades\Route;

// Routes d'authentification
Route::post('/inscription', [AuthController::class, 'inscription'])->name('inscription');
Route::post('/connexion', [AuthController::class, 'connexion'])->name('connexion');
Route::get('/deconnexion', [AuthController::class, 'deconnexion'])->name('deconnexion');
Route::delete('/delete-account', [AuthController::class, 'deleteAccount'])->name('delete.account')->middleware('auth');

// Route d'accueil
Route::get('/', function () {
    return view('index'); // Assurez-vous d'avoir une vue index.blade.php
});

// Route pour consulter une commande
Route::get('/consulter_commande', function () {
    return view('consulter_commande'); // Assurez-vous d'avoir une vue consulter_commande.blade.php
});

// Route pour le suivi de commande
Route::get('/suivie_commande', function () {
    return view('suivie_commande'); // Assurez-vous d'avoir une vue suivi_commande.blade.php
});

// Route pour l'historique des commandes
Route::get('/historique_commandes', function () {
    return view('historique_commandes'); // Assurez-vous d'avoir une vue historique_commandes.blade.php
});

// Route pour afficher tous les produits
Route::get('/products', function () {
    return view('products'); // Assurez-vous d'avoir une vue products.blade.php
});

// Route pour afficher les produits pour femmes
Route::get('/products_femme', function () {
    return view('products_femme'); // Assurez-vous d'avoir une vue products_femme.blade.php
});

// Route pour afficher les produits pour hommes
Route::get('/products_homme', function () {
    return view('products_homme'); // Assurez-vous d'avoir une vue products_homme.blade.php
});

// Route pour afficher les détails d'un produit
Route::get('/products_details', function () {
    return view('products_details'); // Assurez-vous d'avoir une vue products-details.blade.php
});

// Route pour le compte utilisateur
Route::get('/account', function () {
    return view('account'); // Assurez-vous d'avoir une vue account.blade.php
});

// Route pour le panier
Route::get('/cart', function () {
    return view('cart'); // Assurez-vous d'avoir une vue cart.blade.php
});