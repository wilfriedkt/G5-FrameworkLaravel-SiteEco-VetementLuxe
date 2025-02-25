<?php

use App\Http\Controllers\AuthController;
    use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Exceptions\PostTooLargeException;
//use Illuminate\Routing\AbstractRouteCollection;


// Route d'accueil
Route::get('/', [ProduitController::class, 'index'])->name('index');


// Routes d'authentification
Route::post('/inscription', [AuthController::class, 'inscription'])->name('inscription');
Route::post('/connexion', [AuthController::class, 'connexion'])->name('connexion');
Route::get('/deconnexion', [AuthController::class, 'deconnexion'])->name('deconnexion');
Route::delete('/delete-account', [AuthController::class, 'deleteAccount'])->name('delete.account')->middleware('auth');



// Route pour afficher tous les produits
Route::get('/products', function () {
    return view('products');
})->name('user.products');

// Route pour afficher les produits pour femmes
Route::get('/products_femme', function () {
    return view('user.products_femme');
});

// Route pour afficher les produits pour hommes
Route::get('/products_homme', function () {
    return view('user.products_homme');
});

// Route pour afficher les détails d'un produit
Route::get('/products_details', function () {
    return view('user.products_details');
});

// Route pour le compte utilisateur
Route::get('/account', function () {
    return view('user.account');
})->name('account');

// Route pour le panier
Route::get('/cart', function () {
    return view('uer.cart');
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


//admin
// Traiter le formulaire (POST)
Route::post('/admin/ajoutProduit', [ProduitController::class, 'ajoutProduit'])->name('admin.ajoutProduit');

// Afficher le formulaire (GET)
Route::get('/admin/ajoutProduit', [ProduitController::class, 'affichFormProduit'])->name('admin.formAjoutProduit');


?>
