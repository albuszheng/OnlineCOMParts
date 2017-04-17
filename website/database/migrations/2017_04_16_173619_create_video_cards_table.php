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
        Schema::create('video_cards', function (Blueprint $table) {
//            $table->unsignedInteger('id');
            $table->string('Name', 11);
            $table->string('Manufacturer', 11);
            $table->string('Chipset', 11);
            $table->string('Memory', 11);
            $table->string('CoreClock', 11);

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
        Schema::dropIfExists('video_cards');
    }
}
