<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Ajouter des utilisateurs
        DB::table('utilisateurs')->insert([
            ['idUtilisateur' => 1, 'nom' => 'Dupont', 'prenom' => 'Jean', 'email' => 'jean.dupont@example.com', 'motDePasse' => Hash::make('password')],
            ['idUtilisateur' => 2, 'nom' => 'Martin', 'prenom' => 'Sophie', 'email' => 'sophie.martin@example.com', 'motDePasse' => Hash::make('password')],
        ]);

        // Ajouter un administrateur (lié à un utilisateur existant)
        DB::table('administrateurs')->insert([
            ['idAdministrateur' => 1], // L'utilisateur "Jean Dupont" devient administrateur
        ]);

        // Ajouter des types de produits
        DB::table('types_produits')->insert([
            ['idTypeProduit' => 1, 'nomType' => 'Électronique'],
            ['idTypeProduit' => 2, 'nomType' => 'Vêtements'],
        ]);

        // Ajouter des produits
        DB::table('produits')->insert([
            ['idProduit' => 1, 'nom' => 'Téléphone', 'description' => 'Smartphone dernier cri', 'prix' => 699.99, 'stock' => 50, 'idTypeProduit' => 1],
            ['idProduit' => 2, 'nom' => 'T-shirt', 'description' => 'T-shirt en coton', 'prix' => 19.99, 'stock' => 100, 'idTypeProduit' => 2],
        ]);

        // Ajouter une commande
        DB::table('commandes')->insert([
            ['idCommande' => 1, 'idUtilisateur' => 1, 'idAdministrateur' => 1, 'statut' => 'En cours'],
        ]);

        // Ajouter des produits à la commande
        DB::table('produits_commandes')->insert([
            ['idCommande' => 1, 'idProduit' => 1, 'quantite' => 1],
            ['idCommande' => 1, 'idProduit' => 2, 'quantite' => 2],
        ]);

        // Ajouter un paiement
        DB::table('paiements')->insert([
            ['idPaiement' => 1, 'idUtilisateur' => 1, 'idCommande' => 1, 'montant' => 719.98, 'modePaiement' => 'Carte bancaire'],
        ]);

        // Ajouter des évaluations
        DB::table('evaluations')->insert([
            ['idEvaluation' => 1, 'idProduit' => 1, 'idUtilisateur' => 1, 'note' => 5, 'commentaire' => 'Excellent produit!'],
            ['idEvaluation' => 2, 'idProduit' => 2, 'idUtilisateur' => 2, 'note' => 4, 'commentaire' => 'Confortable mais un peu cher.'],
        ]);
    }
}
