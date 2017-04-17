<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_homes', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('Age', 11);
            $table->string('Gender', 11);
            $table->string('Income', 11);
            $table->string('MarriageStatus', 11);

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
        Schema::dropIfExists('customer_homes');
    }
}
