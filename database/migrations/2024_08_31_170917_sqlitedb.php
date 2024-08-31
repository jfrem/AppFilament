<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\File;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Ruta al archivo database.sqlite
        $sqlitePath = database_path('database.sqlite');

        // Verifica si el archivo no existe y lo crea si es necesario
        if (!File::exists($sqlitePath)) {
            File::put($sqlitePath, '');
            echo "Archivo database.sqlite creado en " . $sqlitePath . "\n";
        } else {
            echo "El archivo database.sqlite ya existe en " . $sqlitePath . "\n";
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
