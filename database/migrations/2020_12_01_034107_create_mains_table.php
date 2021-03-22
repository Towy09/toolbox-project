<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mains', function (Blueprint $table) {
            $table->id();

            //$table->unsignedBigInteger('main_id');
            //$table->foreign('main_id')->references('id')->on('users');

            $table->foreignId('user_id')->constrained('users');

            $table->string("nombre_empresa", 50);
            $table->string("nombre_responsable", 100);
            $table->string("cargo_responsable", 50);
            $table->string("tipo_actividad", 50);
            $table->integer("numero_trabajadores");
            $table->integer("trafico_externo");
            //$table->date("fecha");
            //$table->string("correo_responsable");

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
        Schema::dropIfExists('mains');
    }
}
