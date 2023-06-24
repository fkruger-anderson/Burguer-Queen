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
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome_endereco');
            $table->string('rua_endereco');
            $table->string('num_endereco');
            $table->string('cep');
            $table->string('complemento')->nullable;
            $table->unsignedBigInteger('id_bairro');
            $table->foreign('id_bairro')->references('id')->on('bairros');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enderecos');
    }
};
