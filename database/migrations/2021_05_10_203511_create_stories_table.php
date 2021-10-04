<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->unsignedBigInteger('documents_id');
            $table->foreign('documents_id')->references('id')->on('documents');
             $table->unsignedBigInteger('storycategories_id');
            $table->foreign('storycategories_id')->references('id')->on('storycategories');
            $table->string('entitle',50);
            $table->string('maltitle',100);
            $table->text('encontent',200);
            $table->text('malcontent',200);
            $table->tinyInteger('published')->default('0');
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
        Schema::dropIfExists('stories');
    }
}
