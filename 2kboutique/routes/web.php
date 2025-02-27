<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\DetailProduitController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Exceptions\PostTooLargeException;
//use Illuminate\Routing\AbstractRouteCollection;


//PARTIE UTILISATEUR
// Route d'accueil
Route::get('/', [ProduitController::class, 'index'])->name('index');

// Route pour afficher les produits pour femmes
Route::get('/products_femme', [ProduitController::class, 'vetementFemme'])->name('vetements.femme');

// Route pour afficher les produits pour hommes
Route::get('/products_homme', [ProduitController::class, 'vetementHomme'])->name('vetements.homme');

// Route pour afficher tous les produits
Route::get('/products', [ProduitController::class, 'allVetements'])->name('all.vetements');

// Route pour afficher les détails d'un produit
Route::get('/products_details/{id}', [DetailProduitController::class, 'detailProduit'])->name('produits.details');


// Routes d'authentification
Route::post('/inscription', [AuthController::class, 'inscription'])->name('inscription');
Route::post('/connexion', [AuthController::class, 'connexion'])->name('connexion');
Route::get('/deconnexion', [AuthController::class, 'deconnexion'])->name('deconnexion');
Route::delete('/delete-account', [AuthController::class, 'deleteAccount'])->name('delete.account')->middleware('auth');


// Route pour le compte utilisateur
Route::get('/account', function () {
    return view('user.account');
})->name('account');

// Route pour le panier
Route::get('/cart', function () {
    return view('user.cart');
});

// Route pour consulter une commande
Route::get('/consulter_commande', function () {
    return view('user.consulter_commande');

});


// Route pour l'historique des commandes
Route::get('/historique_commandes', function () {
    return view('user.historique_commandes');

});


// Route pour le suivi de commande
Route::get('/suivie_commande', function () {
    return view('user.suivie_commande');

});



//PARTIE ADMIN
// Traiter le formulaire (POST)
Route::post('/admin/ajoutProduit', [ProduitController::class, 'ajoutProduit'])->name('admin.ajoutProduit');

// Afficher le formulaire (GET)
Route::get('/admin/ajoutProduit', [ProduitController::class, 'affichFormProduit'])->name('admin.formAjoutProduit');


?>
