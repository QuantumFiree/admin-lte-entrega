<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante', function (Blueprint $table) {
            $table->char('cod_estudiante', 16);
            $table->char('nom_estudiante', 32);
            $table->char('programa', 2);
            $table->char('facultad', 2);
            $table->primary('cod_estudiante',2);
            $table-> foreign('facultad')-> references('cod_facultad') -> on('facultad');
            $table-> foreign('programa')-> references('cod_programa') -> on('programa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiante');
    }
};
