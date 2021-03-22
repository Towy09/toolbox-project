<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInteractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interactions', function (Blueprint $table) {
            $table->id();

            //$table->unsignedBigInteger('interaction_id');
            //$table->foreign('interaction_id')->references('id')->on('users');

            $table->foreignId('user_id')->constrained('users');

            $table->text('promocion_salud'); // Todos son json
            $table->text('distancia_interpersonal');
            $table->text('control_ingreso_egreso');
            $table->text('acceso_visitantes_proveedores');
            $table->text('control_visitas');

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
        Schema::dropIfExists('interactions');
    }
}
