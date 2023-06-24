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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome_produto');
            $table->boolean('eh_ativo_produto');
            $table->double('preco_produto',10,2);
            $table->text('descricao_produto');
            $table->string('imagem')->nullable;
        });

        Schema::create('ingredientes_produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_ingrediente');
            $table->foreign('id_ingrediente')->references('id')->on('ingredientes');

            $table->unsignedBigInteger('id_produto');
            $table->foreign('id_produto')->references('id')->on('produtos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
        Schema::dropIfExists('ingredientes_produtos');
    }
};
