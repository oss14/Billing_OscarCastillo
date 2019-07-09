<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EstaEsTablaproductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_producto', function (Blueprint $table) {
            $table->bigIncrements('id_producto');
            $table->string('nombre_producto', 100);
            $table->string('detalle_producto', 100);
            $table->float('precio_producto', 8, 2);
            $table->bigInteger('codigo_producto');
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
        Schema::dropIfExists('tbl_producto');
    }
}
