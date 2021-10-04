<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFielddepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fielddepartments', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->unsignedBigInteger('departments_id');
            $table->foreign('departments_id')->references('id')->on('departments');
             $table->string('name',100);
             $table->string('malname',200);
            $table->tinyInteger('status')->default('1');
             $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
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
        Schema::dropIfExists('fielddepartments');
    }
}
