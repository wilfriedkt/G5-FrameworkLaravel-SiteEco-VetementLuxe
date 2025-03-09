<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('paniers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('utilisateur_id')->references('idUtilisateur')->on('utilisateurs')->onDelete('cascade');// Clé étrangère utilisateur
            $table->foreignId('produit_id')->references('id')->on('produits')->onDelete('cascade');// Clé étrangère produit
            $table->integer('quantite')->default(1);
            $table->decimal('prix_total', 10, 2);
            $table->timestamp('date_ajout')->useCurrent();
        });
    }

    public function down() {
        Schema::dropIfExists('paniers');
    }
};

?>
