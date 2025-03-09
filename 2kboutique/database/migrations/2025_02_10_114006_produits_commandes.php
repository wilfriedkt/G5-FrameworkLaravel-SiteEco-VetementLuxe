<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produits_commandes', function (Blueprint $table) {
            $table->foreignId('commande_id')->references('idCommande')->on('commandes')->onDelete('cascade');// Clé étrangère commandes
            $table->foreignId('idProduit')->references('id')->on('produits')->onDelete('cascade');// Clé étrangère produit
            $table->integer('quantite')->check('quantite > 0');
            $table->primary(['commande_id', 'idProduit']);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits_commandes');
    }
};
