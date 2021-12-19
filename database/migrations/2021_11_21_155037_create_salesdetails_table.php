<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesdetails', function (Blueprint $table) {
            $table->increments('item_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('inventario_id')->unsigned();
            $table->string('codigo', 20);
            $table->string('detalle', 80);
            $table->integer('presentacion_id')->unsigned();
            $table->string('presentacion',40);
            $table->string('marca', 40);
            $table->float('pvpunit',10,2);
            $table->float( 'cant', 10, 2)->unsigned();
            $table->float( 'iva', 6, 2)->unsigned();
            $table->float( 'inc', 6, 2)->unsigned();
            $table->foreign('user_id')->references('user_id')->on('users');
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
        Schema::dropIfExists('salesdetails');
    }
}
