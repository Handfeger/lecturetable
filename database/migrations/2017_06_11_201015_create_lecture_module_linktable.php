<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLectureModuleLinktable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecture_module', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lecture_id')->unsigned();
            $table->foreign('lecture_id')
                ->references('id')->on('lectures')
                ->onDelete('cascade');
            $table->integer('module_id')->unsigned();
            $table->foreign('module_id')
                ->references('id')->on('modules')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lecture_module');
    }
}
