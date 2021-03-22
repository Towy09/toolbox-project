<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();

            //$table->unsignedBigInteger('company_id');
            //$table->foreign('company_id')->references('id')->on('users');

            $table->foreignId('user_id')->constrained('users');

            $table->integer('tamaño_empresa');
            $table->integer('tamaño_entradas');
            $table->integer('entradas_habilitadas');
            $table->integer('entradas_deshabilitadas');
            $table->integer('tamaño_salas');
            $table->integer('salas_habilitadas');
            $table->integer('salas_deshabilitadas');
            $table->integer('tamaño_oficinas');
            $table->integer('oficinas_habilitadas');
            $table->integer('oficinas_deshabilitadas');
            $table->integer('tamaño_baños');
            $table->integer('baños_habilitadas');
            $table->integer('baños_deshabilitadas');
            $table->integer('tamaño_ensamble');
            $table->integer('ensamble_habilitadas');
            $table->integer('ensamble_deshabilitadas');
            $table->integer('tamaño_produccion');
            $table->integer('produccion_habilitadas');
            $table->integer('produccion_deshabilitadas');
            $table->integer('tamaño_carga');
            $table->integer('carga_habilitadas');
            $table->integer('carga_deshabilitadas');
            $table->integer('tamaño_cafeteria');
            $table->integer('cafeteria_habilitadas');
            $table->integer('cafeteria_deshabilitadas');
            $table->integer('tamaño_comedores');
            $table->integer('comedores_habilitadas');
            $table->integer('comedores_deshabilitadas');
            $table->integer('tamaño_ascensores');
            $table->integer('ascensores_habilitadas');
            $table->integer('ascensores_deshabilitadas');
            $table->integer('tamaño_escaleras');
            $table->integer('escaleras_habilitadas');
            $table->integer('escaleras_deshabilitadas');
            $table->text('informacion_extra', 255)->nullable();
            $table->text('zonas_alto_riesgo', 255)->nullable();

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
        Schema::dropIfExists('companies');
    }
}
