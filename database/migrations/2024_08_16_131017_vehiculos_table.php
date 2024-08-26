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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table-> id (); 
            $table-> string ('matricula');
            $table-> string ('marca');
            $table-> string ('modelo');
            $table-> year ('anio_fabricacion'); 
            $table-> string ('propietario_nombre'); 
            $table-> text ('propietario_direccion'); 
            $table-> integer ('propietario_telefono');
            $table-> date ('fecha_registro');
            $table-> string('tipo_combustible');
            $table-> integer ('kilometraje');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
 