<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->datetime('start_time')->nullable();
            $table->bigInteger('venue_id')->unsigned();
            $table->foreign('venue_id')->references('id')->on('venues')->onDelete('cascade');
            $table->string('phone');
            $table->double('amount');
            $table->double('deposit');
            $table->double('remain');
            $table->enum('booking_status',['pending','accepted','rejected','complete','not_completed'])->default('accepted');
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
        Schema::dropIfExists('events');
    }
};
