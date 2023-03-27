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
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('medico_id')->constrained('medicos', 'id')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            $table->foreignId('paciente_id')->constrained('pacientes', 'id')
            ->cascadeOnUpdate()
            ->nullOnDelete();
            $table->text('conteudo');
            $table->dateTime('data');
            $table->string('tipo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos');
    }
};
