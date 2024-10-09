<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Relación con el usuario
            $table->unsignedBigInteger('company_id'); // Relación con la empresa
            $table->string('name'); // Nombre del empleado
            $table->string('phone')->nullable(); // Teléfono (opcional)
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
