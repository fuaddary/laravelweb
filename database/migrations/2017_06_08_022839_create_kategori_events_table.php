<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategoriEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_id')->unsigned();
            $table->integer('kategori_id')->unsigned();
            $table->timestamps();
            
        });

        Schema::table('kategori_events', function(Blueprint $table){
            $table->foreign('event_id')->references('id')->on('events');
            $table->foreign('kategori_id')->references('id')->on('kategoris');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori_events');
    }
}
