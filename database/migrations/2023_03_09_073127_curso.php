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
        Schema::create('curso', function (Blueprint $table) {
            $table->id('curso_id');
            $table->string('nombre');
            $table->unsignedBigInteger('kit_id');

            $table->foreign('kit_id')->references('kit_id')->on('kit');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curso');
    }
};
