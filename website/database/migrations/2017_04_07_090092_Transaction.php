<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Transaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('CustomerID');
            $table->unsignedInteger('ProductID');
            $table->unsignedInteger('StoreID');
            $table->string('Quantity', 11);
            $table->dateTime('TransactionDate');
            $table->string('TransactionStatus');
            $table->float('TotalPrice', 10, 2);
//            $table->primary('id');
            $table->foreign('CustomerID')->references('id')->on('customer_info');
            $table->foreign('ProductID')->references('id')->on('products');
            $table->foreign('SalespersonID')->references('id')->on('salesperson');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
