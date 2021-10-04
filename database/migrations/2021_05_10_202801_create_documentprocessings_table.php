<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentprocessingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentprocessings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('documents_id');
            $table->foreign('documents_id')->references('id')->on('documents');
            $table->unsignedBigInteger('currentowner');
            $table->foreign('currentowner')->references('id')->on('users');
            $table->tinyInteger('contributor_status')->default('0');
            $table->unsignedBigInteger('contributor_id');
            $table->foreign('contributor_id')->references('id')->on('users');
            $table->timestamp('contributor_timestamp');
            $table->text('contributor_remarks',200);
            $table->tinyInteger('moderator_status')->default('0');
            $table->unsignedBigInteger('moderator_id');
            $table->foreign('moderator_id')->references('id')->on('users');
            $table->timestamp('moderator_timestamp');
            $table->text('moderator_remarks',200);
            $table->tinyInteger('approver_status')->default('0');
            $table->unsignedBigInteger('approver_id');
            $table->foreign('approver_id')->references('id')->on('users');
            $table->timestamp('approver_timestamp');
            $table->text('approver_remarks',200);
            $table->tinyInteger('status')->default('1');
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
        Schema::dropIfExists('documentprocessings');
    }
}
