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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id('idEvaluation');
            $table->foreignId('idUtilisateur')->constrained('utilisateurs')->onDelete('cascade');
            $table->foreignId('idProduit')->constrained('produits')->onDelete('cascade');
            $table->integer('note')->check('note BETWEEN 1 AND 5');
            $table->text('commentaire')->nullable();
            $table->timestamp('dateEvaluation')->default(now());
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
