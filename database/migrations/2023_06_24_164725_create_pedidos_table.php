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

        Schema::create('usuario_pedido_situacao', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');

            $table->unsignedBigInteger('id_pedido');
            $table->foreign('id_pedido')->references('id')->on('pedidos');
            
            $table->unsignedBigInteger('id_situacao');
            $table->foreign('id_situacao')->references('id')->on('situacaos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
        Schema::dropIfExists('usuario_pedido_situacao');
    }
};
