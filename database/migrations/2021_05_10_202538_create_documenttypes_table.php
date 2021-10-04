<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumenttypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documenttypes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',20);
            $table->string('malname',50);
            $table->integer('reviewdays');
            $table->integer('archivedays');
            $table->integer('cmap');
            $table->unsignedBigInteger('documentcategories_id');
            $table->foreign('documentcategories_id')->references('id')->on('documentcategories');
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
        Schema::dropIfExists('documenttypes');
    }
}
