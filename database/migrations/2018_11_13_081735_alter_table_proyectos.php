<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableProyectos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proyectos', function (Blueprint $table) {
            $table->integer('empleado_id');
            $table->foreign('empleado_id')->references('id')->on('empleados');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proyectos', function (Blueprint $table) {
           $table->dropColumn('empleado_id');
           $table->foreign('empleado_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
        });
    }
}
