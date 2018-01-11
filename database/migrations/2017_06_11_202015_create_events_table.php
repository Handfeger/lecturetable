<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lecture_id')->unsigned();
            $table->foreign('lecture_id')
                ->references('id')->on('lectures')
                ->onDelete('restrict');
            $table->integer('term_id')->unsigned();
            $table->foreign('term_id')
                ->references('id')->on('terms')
                ->onDelete('restrict');
            $table->integer('docent_id')
                ->references('id')->on('docents')
                ->onDelete('restrict');
            $table->mediumText('link')->nullable();
            $table->string('room')->nullable();
            $table->text('text')->nullable();
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
        Schema::dropIfExists('events');
    }
}
