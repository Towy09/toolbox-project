<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCleaningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cleanings', function (Blueprint $table) {
            $table->id();

            //$table->unsignedBigInteger('cleaning_id');
            //$table->foreign('cleaning_id')->references('id')->on('users');

            $table->foreignId('user_id')->constrained('users');

            $table->string('encargado_limpieza');
            $table->text('otros_limpieza', 255)->nullable();
            $table->string('ingredientes_activos');
            $table->text('otros_ingredientes',255)->nullable();
            $table->string('tiempo_desinfeccion');
            $table->string('tiempo_sanitizacion');
            $table->string('herramientas_metodos');

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
        Schema::dropIfExists('cleanings');
    }
}
