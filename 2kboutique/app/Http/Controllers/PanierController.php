<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panier;
use App\Models\Produit;
use Illuminate\Support\Facades\Auth;

class PanierController extends Controller {

     // Afficher le panier
    public function voirPanier()
    {
        $paniers = Panier::where('utilisateur_id', Auth::id())->get();
        return view('user.panier', compact('paniers'));

    }


    public function ajouterAuPanier(Request $request, $idProduit) {
        // Vérifie si l'utilisateur est connecté
        if (!Auth::check()) {
            return redirect('/inscription')->with('error', 'Vous devez être connecté pour ajouter un produit au panier.');
        }

        $produit = Produit::findOrFail($idProduit);

        // Vérifie si le produit est déjà dans le panier de l'utilisateur
        $panier = Panier::where('utilisateur_id', Auth::id())
                        ->where('produit_id', $produit->id)
                        ->first();

        if ($panier) {
            // Si le produit est déjà dans le panier, augmenter la quantité
            $panier->quantite += $request->input('quantite', 1);
            $panier->prix_total = $panier->quantite * $produit->prix;
            $panier->save();
        } else {
            // Sinon, ajouter un nouveau produit au panier
            Panier::create([
                'utilisateur_id' => Auth::id(),
                'produit_id' => $produit->id,
                'quantite' => $request->input('quantite', 1),
                'prix_total' => $request->input('quantite', 1) * $produit->prix,
            ]);
        }

        return redirect()->back()->with('success', 'Produit ajouté au panier avec succès !');
    }
}

?>
