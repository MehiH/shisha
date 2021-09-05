<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('time_from');
            $table->string('time_to');
            $table->integer('booking_type');
            $table->integer('reservation_type');
            $table->string('email');
            $table->string('contact_number');
            $table->integer('number_persons');
            $table->string('reserved_date');
            $table->tinyInteger('delete');
            $table->tinyInteger('status');
            $table->integer('occasion');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('reservations');
    }
}
