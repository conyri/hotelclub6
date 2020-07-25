<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo_Salon');             
            $table->string('valor_dia');             
            $table->string('rut_client');
            $table->string('fecha_E');
            $table->string('fecha_S');
            $table->string('dias_total');
            $table->string('coto_total');
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
        Schema::dropIfExists('reservasa');
    }
}
