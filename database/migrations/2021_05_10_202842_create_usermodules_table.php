<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsermodulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usermodules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
             $table->unsignedBigInteger('documenttypes_id');
            $table->foreign('documenttypes_id')->references('id')->on('documenttypes');
             $table->unsignedBigInteger('usertypes_id');
            $table->foreign('usertypes_id')->references('id')->on('usertypes');
             $table->tinyInteger('status')->default('1');
              $table->unsignedBigInteger('enteredusers_id');
            $table->foreign('enteredusers_id')->references('id')->on('users');
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
        Schema::dropIfExists('usermodules');
    }
}
