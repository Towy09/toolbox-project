<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStrategiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strategies', function (Blueprint $table) {
            $table->id();

            //$table->unsignedBigInteger('strategy_id');
            //$table->foreign('strategy_id')->references('id')->on('users');

            $table->foreignId('user_id')->constrained('users');

            $table->text('supervision_consulta'); //json
            $table->text('estrategia_digital'); //json
            $table->text('normas_protocolos'); //json
            $table->string('capacitacion_comunicacion'); //json
            $table->string('frecuencia_sanitaria', 100);
            $table->text('acciones_promovidas', 255)->nullable();
            $table->string('indicadores_kpi'); //json
            $table->text('rediseño_kpi', 255)->nullable();
            $table->integer('ausentismo_c19');
            $table->integer('ausentismo_estres');
            $table->integer('ausentismo_pacientes_riesgo');
            $table->text('ausentismo_otros', 255)->nullable();
            $table->text('observaciones', 255)->nullable();

            //$table->text('fecha_hora');

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
        Schema::dropIfExists('strategies');
    }
}
