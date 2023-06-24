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
        Schema::create('cardapios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome_cardapio');
            $table->boolean('eh_ativo_cardapio');
            $table->boolean('tem_ingrediente');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cardapios');
    }
};
