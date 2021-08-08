<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_requests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('user_id');
            $table->bigInteger('car_id');
            $table->bigInteger('estate_id');
            $table->dateTime('planned_start_datetime');
            $table->dateTime('planned_end_datetime')->nullable();
            $table->string('destination');
            $table->string('journey_description');
            $table->dateTime('approved_datetime');
            $table->boolean('active');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_requests');
    }
}
