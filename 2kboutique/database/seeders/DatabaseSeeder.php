<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Ajouter des utilisateurs
        DB::table('utilisateur')->insert([
            ['nom' => 'Dupont', 'prenom' => 'Jean', 'email' => 'jean.dupont@example.com', 'motDePasse' => bcrypt('password')],
            ['nom' => 'Martin', 'prenom' => 'Sophie', 'email' => 'sophie.martin@example.com', 'motDePasse' => bcrypt('password')],
        ]);

        // Ajouter des types de produits
        DB::table('type_produit')->insert([
            ['nomType' => 'Électronique'],
            ['nomType' => 'Vêtements'],
        ]);

        // Ajouter des produits
        DB::table('produit')->insert([
            ['nom' => 'Téléphone', 'description' => 'Smartphone dernier cri', 'prix' => 699.99, 'stock' => 50, 'idTypeProduit' => 1],
            ['nom' => 'T-shirt', 'description' => 'T-shirt en coton', 'prix' => 19.99, 'stock' => 100, 'idTypeProduit' => 2],
        ]);

        // Ajouter des commandes
        DB::table('commande')->insert([
            ['idUtilisateur' => 1, 'montantTotal' => 719.98, 'statut' => 'En cours'],
        ]);

        // Ajouter des produits à la commande
        DB::table('produit_commande')->insert([
            ['idCommande' => 1, 'idProduit' => 1, 'quantite' => 1],
            ['idCommande' => 1, 'idProduit' => 2, 'quantite' => 2],
        ]);

        // Ajouter des paiements
        DB::table('paiement')->insert([
            ['idCommande' => 1, 'montant' => 719.98, 'methode' => 'Carte de crédit'],
        ]);

        // Ajouter des évaluations
        DB::table('evaluation')->insert([
            ['idProduit' => 1, 'idUtilisateur' => 1, 'note' => 5, 'commentaire' => 'Excellent produit!'],
            ['idProduit' => 2, 'idUtilisateur' => 2, 'note' => 4, 'commentaire' => 'Confortable mais un peu cher.'],
        ]);
    }
}