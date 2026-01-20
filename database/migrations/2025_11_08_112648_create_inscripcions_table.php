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
        Schema::create('inscripcions', function (Blueprint $table) {
            $table->id();

            $table->string('nom', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->foreignId('esdeveniment_id')->nullable()->constrained('esdeveniments')->onDelete('cascade');
            $table->string('fitxer', 255)->nullable();

            $table->unique(['email', 'esdeveniment_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centros');
    }
};
