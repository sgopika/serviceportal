<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('documenttypes_id');
            $table->foreign('documenttypes_id')->references('id')->on('documenttypes');
            $table->string('documentnumber',20);
            $table->string('originaldocnumber',50);
            $table->date('documentdate');
            $table->text('filepath',100);
            $table->text('departments_id',100);
            $table->text('fielddepartments_id',100);
            $table->string('referencedoc',50);
            $table->text('referencefile',200);
            $table->tinyInteger('published')->default('0');
            $table->timestamp('publishedtimestamp')->nullable();
            $table->timestamp('incomingtimestamp')->nullable();
            $table->unsignedBigInteger('documentorigins_id');
            $table->foreign('documentorigins_id')->references('id')->on('documentorigins');
            $table->integer('stories')->default('0');
            $table->text('entitle',200);
            $table->text('maltitle',200);
            $table->text('enabstract',200);
            $table->text('malabstract',200);
            $table->text('encontent',200);
            $table->text('malcontent',200);
            $table->text('enkeywords',100);
            $table->text('malkeywords',100);
             $table->unsignedBigInteger('documentcategories_id');
            $table->foreign('documentcategories_id')->references('id')->on('documentcategories');
            $table->text('poster',100);
            $table->text('size',100);
            $table->text('alt',100);
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
        Schema::dropIfExists('documents');
    }
}
