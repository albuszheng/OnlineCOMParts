<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Store extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Address', 45);
            $table->string('Name', 11);
            $table->string('SalespersonNum', 11);
            $table->unsignedInteger('ManagerID');
            $table->unsignedInteger('RegionID');

//            $table->primary('id');
//            $table->foreign('ManagerID')->references('id')->on('salesperson');
            $table->foreign('RegionID')->references('id')->on('regions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store');
    }
}
