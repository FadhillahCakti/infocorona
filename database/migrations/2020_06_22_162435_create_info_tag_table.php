<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('info_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->foreign('info_id')->references('id')->on('info')
            ->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tag')
            ->onDelete('cascade');
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
        Schema::dropIfExists('info_tag');
    }
}