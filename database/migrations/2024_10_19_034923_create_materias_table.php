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
        Schema::create('materias', function (Blueprint $table) {
            $table->id('id');
            $table->String('nombreMateria',200)->unique();
            $table->String('nivel',5);
            $table->String('nombreMediano',50)->unique();
            $table->String('nombreCorto',50)->unique();
            $table->String('modalidad',50)->unique();
            $table->foreignId("reticula_id")->constrained();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materias');
    }
};
