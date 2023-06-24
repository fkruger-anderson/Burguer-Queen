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
        Schema::create('promocaos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome_promocao');
            $table->boolean('eh_ativo_promocao');
            $table->date('data_inicial_promocao');
            $table->date('data_final_promocao');
            $table->double('valor_desconto', 10,2);
            $table->unsignedBigInteger('objeto_promocao');
            $table->unsignedBigInteger('id_tipo_promocao');
            $table->foreign('id_tipo_promocao')->references('id')->on('tipo_promocaos');
            $table->unsignedBigInteger('id_tipo_desconto');
            $table->foreign('id_tipo_desconto')->references('id')->on('tipo_descontos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promocaos');
    }
};
