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
        Schema::create('centros', function (Blueprint $table) {
            $table->id();

            $table->string('name', 255);
            $table->string('address', 255)->nullable();

            // TIPOS
            // $table->string('name', 255)->nullable();
            // $table->text('address', 255)->nullable();
            // $table->integer('edad')->nullable();
            // $table->enum('estado_trabajador', ['Activo', 'Suplencia'])->nullable();
            // $table->boolean('trabaja')->default(false);
            
            // FK -- Esta FK seria si estuviera en profesional y tiene un campo center_id que apunta a la tabla centers a su id,
            //        se borrara el profesional si se borra el centro
            // $table->foreignId('center_id')->nullable()->constrained('centers')->onDelete('cascade');

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
