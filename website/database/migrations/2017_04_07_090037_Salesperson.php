<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Salesperson extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesperson', function (Blueprint $table) {
            $table->increments('id');
            $table->string('FullName', 11);
            $table->string('Email', 11);
            $table->string('Address', 11);
            $table->string('Salary', 11);
            $table->string('JobTitle', 11);
            $table->unsignedInteger('StoreID');

            $table->foreign('id')->references('id')->on('user_login');
            $table->foreign('StoreID')->references('id')->on('store');
//            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salesperson');
    }
}
