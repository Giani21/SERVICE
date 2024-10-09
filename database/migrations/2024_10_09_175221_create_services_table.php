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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id'); // Relación con la tabla de empresas
            $table->string('service_type'); // Tipo de servicio
            $table->decimal('price', 8, 2); // Precio del servicio
            $table->text('description')->nullable(); // Descripción del servicio
            $table->timestamps();

            // Clave foránea
            $table->foreign('company_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
