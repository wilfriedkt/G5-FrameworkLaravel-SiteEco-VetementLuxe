<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;

use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    // Ajouter un user sur luxeshop
    public function ajoutUser()
    {
        return view('admin.user.ajoutUser');
    }

    //liste de tout les users de luxeshop
    public function listeAllUser()
    {
        $allUser = Utilisateur::all(); // Récupère tous les utilisateurs
        return view('admin.user.listeUser', compact('allUser'));
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
