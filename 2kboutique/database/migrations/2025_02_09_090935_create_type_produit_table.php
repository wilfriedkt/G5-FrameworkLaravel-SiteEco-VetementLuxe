<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()

    {

        Schema::create('type_produit', function (Blueprint $table) {

            $table->id('idTypeProduit');

            $table->string('nomType', 50)->unique();

        });

    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_produit');
    }
};
