<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotherboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Motherboard', function (Blueprint $table) {
//            $table->unsignedInteger('id');
            $table->string('Name', 50);
            $table->string('Manufacturer', 20);
            $table->string('SocketCPU', 11);
            $table->string('FormFactor', 11);
            $table->integer('RAMSlots');
            $table->integer('MaxRAM');

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
        Schema::dropIfExists('Motherboard');
    }
}
