<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prenda', function (Blueprint $table) {
            $table->id();
            $table->string('nombrePrenda');
            $table->string('tipoTela');
            $table->string('color');
            $table->Integer('cantidad');
            $table->mediumInteger('valor');
            
            $table->unsignedBigInteger('factura_id');
 
            $table->foreign('factura_id')->references('id')->on('factura');

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
        Schema::dropIfExists('prenda');
    }
};
