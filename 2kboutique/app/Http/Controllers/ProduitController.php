<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Produit;

class ProduitController extends Controller
{


    // Afficher le formulaire pour ajouter un produit
    public function affichFormProduit()
    {
        return view('admin.produit.ajoutProduit');
    }


    /**
     * Ajouter un produit.
     */
    public function ajoutProduit(Request $request)
    {
        // Traiter la soumission du formulaire pour ajouter un produit
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:5120', // // Limite à 5 Mo
            'prix' => 'required|numeric|min:1',
            'stock' => 'required|integer|min:0',
            'type' => 'required|in:Produit Phare,Nouveau Produit',
            'genre' => 'required|in:femme,homme',
        ]);

        // Gestion de l'image (si un fichier est téléchargé)
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('produits', 'public');
        }

        // Création du produit
        Produit::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'image' => $imagePath,
            'prix' => $request->prix,
            'stock' => $request->stock,
            'type' => $request->type,
            'genre' => $request->genre,
        ]);

        // Redirection après ajout
        return redirect()->route('admin.formAjoutProduit')->with('status', 'Votre produit a bien été ajouté avec succès.');
    }

    //liste de tout les produit sur le site web
    public function listeAllProduit()
    {
        $toutProduits = Produit::all(); // Récupère tous les produits
        return view('admin.produit.listeProduit', compact('toutProduits'));
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer les produits en fonction du type
        $produitsPhares = Produit::where('type', 'Produit Phare')->get();
        $nouveauxProduits = Produit::where('type', 'Nouveau Produit')->get();

        return view('index', compact('produitsPhares', 'nouveauxProduits'));
    }

    // Récupérer les produits des femmes
    public function vetementFemme()
    {
        $produitsFemme = Produit::where('genre', 'femme')->get();
        return view('user.products_femme', compact('produitsFemme'));
    }

    // Récupérer les produits des hommes
    public function vetementHomme()
    {
        $produitsHomme = Produit::where('genre', 'homme')->get();
        return view('user.products_homme', compact('produitsHomme'));
    }

    // Récupérer tous les produits (hommes et femmes)
    public function allVetements()
    {
        $allProduits = Produit::all(); // Récupère tous les produits
        return view('user.products', compact('allProduits'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
