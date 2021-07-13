<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transacciones', function (Blueprint $table) {
            $table->id();
            $table->string('folio');
            $table->bigInteger('codigo_referido_id') -> unsigned();
            $table->foreign('codigo_referido_id') -> references('id') -> on('empleados') -> onDelete('cascade');
            $table->bigInteger('descuento_obtenido_id') -> unsigned();
            $table->foreign('descuento_obtenido_id') -> references ('id') -> on('descuentos') -> onDelete('cascade');
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
        Schema::dropIfExists('transacciones');
    }
}
