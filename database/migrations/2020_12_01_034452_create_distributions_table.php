<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributions', function (Blueprint $table) {
            $table->id();

            //$table->unsignedBigInteger('distribution_id');
            //$table->foreign('distribution_id')->references('id')->on('users');

            $table->foreignId('user_id')->constrained('users');

            $table->string('turnos_empresa'); // los 3 primeros y el ultimo son json
            $table->string('tipo_turnos');
            $table->string('reduccion_turnos');
            $table->string('hora_mayor_ocupacion', 100);
            $table->string('baja_demanda', 100);
            $table->string('tiempo_optimo_limpieza', 100);
            $table->string('trabajo_remoto');

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
        Schema::dropIfExists('distributions');
    }
}
