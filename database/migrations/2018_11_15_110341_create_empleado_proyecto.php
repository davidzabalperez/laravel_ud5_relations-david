<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadoProyecto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado_proyecto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('empleado_id');
            $table->integer('proyecto_id');
            $table->date('fechainicio')->nullable();
            $table->date('fechafin')->nullable();
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
        Schema::dropIfExists('empleados_proyectos');
    }
}
