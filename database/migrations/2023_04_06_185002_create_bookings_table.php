<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('guest_name');
            $table->enum('booking_source', ['Direct', 'Online']);
            $table->string('booking_reference');
            $table->unsignedBigInteger('booking_status_id');
            $table->integer('adults');
            $table->integer('childrens');
            $table->integer('infants');
            $table->enum('meal_plan', ['Room Only', 'In Lounge']);
            $table->double('net_price');
            $table->double('discount');
            $table->double('tax');
            $table->double('gross_price');
            $table->date('check_in');
            $table->date('check_out');
            $table->timestamps();

            $table->foreign('booking_status_id')->references('id')->on('booking_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
