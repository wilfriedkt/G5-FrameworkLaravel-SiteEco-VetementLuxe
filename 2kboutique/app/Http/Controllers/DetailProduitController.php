<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Produit;

class DetailProduitController extends Controller
{
    //
    public function detailProduit($id)
    {
        // Récupérer le produit depuis la base de données
        $produit = Produit::findOrFail($id);

        // Afficher la vue des détails avec les données du produit
        return view('user.products_details', compact('produit'));
    }
}
