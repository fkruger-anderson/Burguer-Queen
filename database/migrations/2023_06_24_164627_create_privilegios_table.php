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
        Schema::create('privilegios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome_privigelio');
            $table->boolean('eh_ativo_privilegio');
        });

        Schema::create('usuario_privilegios', function (Blueprint $table) {
            $table->timestamps();

            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');

            $table->unsignedBigInteger('id_privilegio');
            $table->foreign('id_privilegio')->references('id')->on('privilegios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('privilegios');
        Schema::dropIfExists('usuario_privilegios');
    }
};
