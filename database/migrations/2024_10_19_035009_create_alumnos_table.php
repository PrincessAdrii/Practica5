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
        Schema::create('alumnos', function (Blueprint $table) {
            
            $table->id();
            //crear nueva variable y el valor
            $table->string("noctrl",8);
            $table->string("nombre",50);
            $table->string("apellidoP",50);
            $table->string("apellidoM",50);
            $table->string("sexo",1);
            $table->foreignId("carrera_id")->constrained();
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
