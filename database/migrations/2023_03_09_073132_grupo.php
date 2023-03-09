<?php

use App\Models\kit;
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
        Schema::create('grupo', function (Blueprint $table) {
            $table->id('grupo_id');
            $table->string('nombre');
            $table->unsignedBigInteger('curso_id');

            $table->foreign('curso_id')->references('curso_id')->on('curso');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupo');
    }
};
