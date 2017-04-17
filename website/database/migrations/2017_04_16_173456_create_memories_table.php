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
        Schema::create('memories', function (Blueprint $table) {
//            $table->unsignedInteger('id');
            $table->string('Name', 11);
            $table->string('Manufacturer', 11);
            $table->string('Speed', 11);
            $table->string('CAS', 11);
            $table->string('Modules', 11);
            $table->string('Size', 11);
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
        Schema::dropIfExists('memories');
    }
}
