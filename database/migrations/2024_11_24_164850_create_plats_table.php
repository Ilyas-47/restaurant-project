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
        Schema::create('plats', function (Blueprint $table) {
            $table->bigIncrements('id_plat');
            $table->string('nom_plat');
            $table->string('image_plat');
            $table->float('prix');
            $table->string('rate');
            $table->string('delivery');
            $table->string('diatry');
            $table->string('categorie');
            $table->unsignedBigInteger('id_chef')->nullable();
            $table->timestamps();
            $table->foreign('id_chef')->references('id_chef')->on('chefs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plats');
    }
};
