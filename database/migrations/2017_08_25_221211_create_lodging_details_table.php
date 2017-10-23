<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLodgingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lodging_details', function (Blueprint $table) {
           $table->increments('id');
           $table->string('fullName');
           $table->string('gender');
           $table->string('email');
           $table->integer('age');
           $table->dateTime('logInDate');
           $table->dateTime('logOutDate');
           $table->integer('room_id');
           $table->string('status');
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lodging_details');
    }
}
