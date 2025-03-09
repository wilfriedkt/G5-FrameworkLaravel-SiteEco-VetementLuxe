<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

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
            $user = Utilisateur::create([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'email' => $request->email,
                'motDePasse' => Hash::make($request->motDePasse),
                'photo' => $photoPath, // Sauvegarde du chemin de l'image
            ]);

            // Authentifier l'utilisateur
            Auth::login($user);

            // Retourner sur la page d'inscription avec un message avant redirection
            return redirect()->route('inscription')->with([
                'success' => 'Super 😁 Compte créé avec succès ! Vous serez redirigé vers l\'accueil...',
                'redirect' => route('index') // Stocke l'URL de redirection
            ]);
        }

        // Afficher le formulaire d'inscription lors d'une requête GET
        return view('user.account');
    }

    // Traitement de la connexion
    public function connexion(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'motDePasse' => 'required|string',
        ]);

        $user = Utilisateur::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['motDePasse'], $user->motDePasse)) {
            Auth::login($user);
            return redirect()->route('index');
        }

        return back()->withErrors(['email' => 'Email ou mot de passe incorrect.']);
    }


    public function voirProfil()
{
    //$infoUser = Auth::user(); // Récupérer l'utilisateur connecté
    //return view('user.profil', compact('infoUser')); // Passer l'utilisateur à la vue
    return view('user.profil'); // Passer l'utilisateur à la vue
}


    // Déconnexion
    public function deconnexion(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    // Suppression du compte utilisateur
    public function deleteAccount(Request $request)
    {
        $user = Auth::user(); // Récupérer l'utilisateur connecté

        // Déconnexion de l'utilisateur
        Auth::logout();

        // Suppression de l'utilisateur
        $user->delete();

        // Invalider la session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Rediriger avec un message de confirmation
        return redirect()->route('index')->with('success', 'Votre compte a été supprimé avec succès.');
    }
}

?>
