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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('id_forma_pgto');
            $table->foreign('id_forma_pgto')->references('id')->on('forma_pagamentos');
            $table->unsignedBigInteger('id_frete_detalhado');
            $table->foreign('id_frete_detalhado')->references('id')->on('frete_detalhados');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
