<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande; // Assurez-vous d'avoir un modèle Commande

class CommandeController extends Controller
{
    // Afficher toutes les commandes
    public function index()
    {
        $commandes = Commande::all(); // Récupérer toutes les commandes
        return view('commandes.index', compact('commandes'));
    }

    // Afficher une commande spécifique
    public function show($id)
    {
        $commande = Commande::findOrFail($id); // Récupérer la commande par ID
        return view('commandes.show', compact('commande'));
    }

    // Afficher l'historique des commandes
    public function historique()
    {
        $historique = Commande::where('user_id', auth()->id())->get(); // Récupérer les commandes de l'utilisateur connecté
        return view('commandes.historique', compact('historique'));
    }
}