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
        Schema::create('frete_detalhados', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome_frete_detalhado');
            $table->boolean('eh_ativo_fretedetalhado');
            $table->double('preco', 10, 2);
            $table->unsignedBigInteger('id_frete');
            $table->foreign('id_frete')->references('id')->on('fretes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frete_detalhados');
    }
};
