<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id'); // Relación con la empresa
            $table->string('vehicle_type'); // Tipo de vehículo (camión, furgoneta, etc.)
            $table->string('license_plate'); // Matrícula del vehículo
            $table->timestamps();

            // Clave foránea
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
