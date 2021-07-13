<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameDescuentoObtenidoId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {
            
            $table -> renameColumn( 'descuento_obtenido_id' , 'descuento_activo_id' );

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactions', function (Blueprint $table) {
            
            $table -> renameColumn( 'descuento_activo_id' , 'descuento_obtenido_id' );

        });
    }
}
