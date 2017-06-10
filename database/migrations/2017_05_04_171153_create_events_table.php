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
        Schema::create('events', function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('image');
            $table->string('nama_event');
            $table->string('lokasi');
            $table->integer('repeat');
            $table->datetime('start');
            $table->datetime('end');
            $table->longText('deskripsi_event');
            $table->string('nama_org');
            $table->longText('deskripsi_org');
            
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');

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
