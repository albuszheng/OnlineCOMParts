<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCPUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CPU', function (Blueprint $table) {
//            $table->unsignedInteger('id');
            $table->string('Name', 50);
            $table->string('Manufacturer', 11);
            $table->float('OperatingFrenquency', 5, 2);
            $table->integer('Cores');
            $table->integer('ThermalDesignPower');

            $table->primary('Name');
//            $table->foreign('id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CPU');
    }
}
