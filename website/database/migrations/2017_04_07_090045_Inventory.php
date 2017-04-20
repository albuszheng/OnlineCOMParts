<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Inventory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->unsignedInteger('StoreID');
            $table->unsignedInteger('ProductID');
            $table->integer('InventoryNum');
            $table->dateTime('LastUpdate');

            $table->primary(['StoreID', 'ProductID']);
            $table->foreign('StoreID')->references('id')->on('store');
            $table->foreign('ProductID')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventory');
    }
}
