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
            $table->foreignId('idCommande')->constrained('commandes','idCommande')->onDelete('cascade');
            $table->foreignId('idProduit')->constrained('produits','idProduit')->onDelete('cascade');
            $table->integer('quantite')->check('quantite > 0');
            $table->primary(['idCommande', 'idProduit']);
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
