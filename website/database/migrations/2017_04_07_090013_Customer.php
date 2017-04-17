<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Customer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_info', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('FullName', 11);
            $table->string('Email', 11);
            $table->string('AddressStreet', 11);
            $table->string('AddressCity', 11);
            $table->string('AddressState', 11);
            $table->string('AddressZip', 11);
            $table->string('Kind', 11);

            $table->foreign('id')->references('id')->on('users');
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_info');
    }
}
