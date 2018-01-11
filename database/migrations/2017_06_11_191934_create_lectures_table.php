<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectures',function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('rhythm_type_id')->unsigned();
            $table->foreign('rhythm_type_id')
                ->references('id')->on('rhythm_types')
                ->onDelete('restrict');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lectures');
    }
}
