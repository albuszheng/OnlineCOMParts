<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('VideoCard', function (Blueprint $table) {
//            $table->unsignedInteger('id');
            $table->string('Name', 50);
            $table->string('Manufacturer', 20);
            $table->string('Chipset', 20);
            $table->integer('Memory');
            $table->float('CoreClock', 5,3);

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
        Schema::dropIfExists('VideoCard');
    }
}
