<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Memory', function (Blueprint $table) {
//            $table->unsignedInteger('id');
            $table->string('Name', 50);
            $table->string('Manufacturer', 20);
            $table->string('Speed', 10);
            $table->integer('CAS');
            $table->string('Modules', 11);
            $table->integer('Size');
            $table->float('PricePerGB', 5,2);

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
        Schema::dropIfExists('Memory');
    }
}
