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
        Schema::create('validas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('medico_id')->constrained('medicos', 'id')
            ->cascadeOnUpdate()
            ->cascadeOnDelite();
            $table->foreignId('farmacia_id')->constrained('farmacias', 'id')
            ->cascadeOnUpdate()
            ->restrictOnDelete();
            $table->timestamp('valida');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('validas');
    }
};
