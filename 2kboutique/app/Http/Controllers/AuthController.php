<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function inscription(Request $request)
    {
        // Validation des données
        $request->validate([
            'nom' => 'required|string|max:50',
            'prenom' => 'required|string|max:50',
            'email' => 'required|string|email|max:100|unique:utilisateurs,email',
            'motDePasse' => 'required|string|min:6|confirmed',
        ]);

        // Création de l'utilisateur
        Utilisateur::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'motDePasse' => Hash::make($request->motDePasse),
        ]);

        // Redirection vers une autre page après l'inscription
        return redirect()->route('home')->with('success', 'Inscription réussie !');
    }

    //dans le blade ajoutez :
    // @if(session('success'))
    // <p style="color: green;">{{ session('success') }}</p>
    // @endif

    // défini la route aussi : <form action="{{ route('register') }}" method="POST">



    public function connexion(Request $request)
    {
        // Validation des entrées
        $request->validate([
            'email' => 'required|email|max:100',
            'motDePasse' => 'required|string|min:6',
        ]);

        // Récupérer l'utilisateur
        $utilisateur = Utilisateur::where('email', $request->email)->first();

        // Vérifier si l'utilisateur existe et si le mot de passe est correct
        if (!$utilisateur || !Hash::check($request->motDePasse, $utilisateur->motDePasse)) {
            return back()->withErrors(['error' => 'Email ou mot de passe incorrect']);
        }

        // Authentifier l'utilisateur
        Auth::connexion($utilisateur);

        // Redirection vers le tableau de bord
        return redirect()->route('dashboard')->with('success', 'Connexion réussie !');
    }

    public function deconnexion()
    {
        Auth::deconnexion();
        Session::flush();
        return redirect()->route('login.form')->with('success', 'Déconnexion réussie.'); // Redirection vers la page de connexion où je dois préciser la route
    }

    public function deleteAccount(Request $request)
{
    $user = Auth::Utilisateur(); // Récupérer l'utilisateur connecté

    // Déconnexion de l'utilisateur
    Auth::logout();

    // Suppression de l'utilisateur
    $user->delete();

    // Invalider la session
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    // Rediriger avec un message de confirmation
    return redirect()->route('login.form')->with('success', 'Votre compte a été supprimé avec succès.');
}

}
