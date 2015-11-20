<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeslotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timeslots', function (Blueprint $table) {
            $table->increments('timeslot_id');
            $table->dateTime('date_time');
            $table->string('location');
            $table->integer('max_signups');
            $table->integer('num_signups')->nullable();
            $table->string('experiment_id');    // check if string or can parse to int?
            $table->string('experiment_name');
            $table->boolean('is_archived')->default(FALSE); // FALSE = active timeslot (auto-archive after set time?)
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
        Schema::drop('timeslots');
    }
}
