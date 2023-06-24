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
        Schema::create('forma_pagamentos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome_forma_pgto');
            $table->boolean('eh_ativo_forma_pgto');
            $table->boolean('eh_prazo');
            $table->integer('parcela');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forma_pagamentos');
    }
};
