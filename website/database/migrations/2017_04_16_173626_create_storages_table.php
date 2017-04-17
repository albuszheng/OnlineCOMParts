<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('storages', function (Blueprint $table) {
//            $table->unsignedInteger('id');
            $table->string('Name', 11);
            $table->string('Manufacturer', 11);
            $table->string('Form', 11);
            $table->string('Type', 11);
            $table->string('Capacity', 11);
            $table->string('Cache', 11);
            $table->string('PricePerGB', 11);

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
        Schema::dropIfExists('storages');
    }
}
