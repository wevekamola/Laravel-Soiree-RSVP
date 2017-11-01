<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_guests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_id')->unsigned();         
            $table->foreign('event_id')->references('id')->on('events');
            $table->integer('guest_id')->unsigned();         
            $table->foreign('guest_id')->references('id')->on('guests');
            $table->boolean('rsvp')->nullable();
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
        Schema::dropIfExists('event_guests');
    }
}
