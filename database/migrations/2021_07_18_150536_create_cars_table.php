<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('registration_no');
            $table->string('model');
            $table->string('engine_no');
            $table->string('chassis_no');
            $table->float('price',8,2);
            $table->date('date_of_purchase');
            $table->date('date_of_roadtax_expired');
            $table->boolean('active');
            $table->string('fuel_type');
            $table->integer('type_of_usage');
            $table->string('official_car_of')->nullable();
            $table->string('car_approver_user_id')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
