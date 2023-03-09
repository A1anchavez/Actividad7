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
        Schema::create('usuario', function (Blueprint $table) {
            $table->id('usuario_id');
            $table->string('nombre');
            $table->string('correo')->unique();
            $table->string('contraseña');
            $table->string('rol');
            $table->unsignedBigInteger('grupo_id');

            $table->foreign('grupo_id')->references('grupo_id')->on('grupo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};