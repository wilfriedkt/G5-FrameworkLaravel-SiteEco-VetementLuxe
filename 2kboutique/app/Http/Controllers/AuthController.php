<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
     /**
     * Inscription d'un utilisateur
     */
    public function inscription(Request $request)
    {
        if ($request->isMethod('post')) {
            // Validation des données
            $request->validate([
                'nom' => 'required|string|max:50',
                'prenom' => 'required|string|max:50',
                'email' => 'required|string|email|max:100|unique:utilisateurs,email',
                'motDePasse' => 'required|string|min:6|confirmed',
                'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // La photo est optionnelle
            ]);

            // Gestion de l'image
            $photoPath = null;
            if ($request->hasFile('photo')) {
                $photoPath = $request->file('photo')->store('photoUser', 'public'); // Enregistre dans public/photoUser
            }

            // Création de l'utilisateur
            $utilisateur = Utilisateur::create([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'email' => $request->email,
                'motDePasse' => Hash::make($request->motDePasse),
                'photo' => $photoPath, // Sauvegarde du chemin de l'image
            ]);

            // Authentifier l'utilisateur
            Auth::login($utilisateur);
            session()->regenerate();

            // Retourner sur la page d'inscription avec un message avant redirection
            return redirect()->route('inscription')->with([
                'success' => 'Super 😁 Compte créé avec succès ! Vous serez redirigé vers l\'accueil...',
                'redirect' => route('index') // Stocke l'URL de redirection
            ]);
        }

        // Afficher le formulaire d'inscription lors d'une requête GET
        return view('user.account');
    }




    public function connexion(Request $request)
{
    // Validation des entrées
    $request->validate([
        'email' => 'required|email|max:100',
        'motDePasse' => 'required|string|min:6',
    ]);

    // Récupérer l'utilisateur par son email
    $utilisateur = Utilisateur::where('email', $request->email)->first();

    // Vérifier si l'utilisateur existe et si le mot de passe est correct
    if (!$utilisateur || !Hash::check($request->motDePasse, $utilisateur->motDePasse)) {
        return back()->withErrors(['error' => 'Email ou mot de passe incorrect']);
    }

    // Authentifier l'utilisateur
    Auth::login($utilisateur);

    // Rediriger vers la page d'accueil avec un message de succès
    return redirect()->route('index')->with('successConn', 'Connexion réussie !');
}

    public function deconnexion()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('index')->with('success', 'Déconnexion réussie.'); // Redirection vers la page de connexion où je dois préciser la route
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
