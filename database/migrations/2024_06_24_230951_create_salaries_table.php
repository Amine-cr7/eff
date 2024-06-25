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
        Schema::create('salaries', function (Blueprint $table) {
            $table->id('codeSal');
            $table->string('nomSal');
            $table->string('prenomSal');
            $table->date('dateEmbauche');
            $table->date('dateNaissance');
            $table->string('fonction');
            $table->foreignId('codeSer')->constrained('services','codeSer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salaries');
    }
};
