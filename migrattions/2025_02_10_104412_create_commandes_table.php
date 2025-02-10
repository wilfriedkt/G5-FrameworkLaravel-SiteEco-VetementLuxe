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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id('idCommande');
            $table->foreignId('idUtilisateur')->constrained('utilisateurs')->onDelete('cascade');
            $table->foreignId('idAdministrateur')->constrained('administrateurs')->onDelete('cascade');
            $table->timestamp('dateCommande')->default(now());
            $table->enum('statut', ['En cours', 'Expédiée', 'Livrée', 'Annulée'])->default('En cours');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
