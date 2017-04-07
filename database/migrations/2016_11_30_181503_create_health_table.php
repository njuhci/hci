<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_goals', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->double('heat')->nullable();
            $table->double('distance')->nullable();
            $table->integer('step')->nullable();
            $table->double('weight')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('data_sports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->tinyInteger('type');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->time('sports_time');
            $table->double('heat');
            $table->double('distance')->nullable();
            $table->integer('step')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('data_health', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->dateTime('time');
            $table->double('height');
            $table->double('weight');
            $table->double('fat_percentage');
            $table->double('muscle_percentage');
            $table->double('visceral_fat');
            $table->double('metabolic_rate');
            $table->double('moisture_percentage');
            $table->double('protein');
            $table->double('bone_mass');
            $table->double('bmi');
            $table->integer('heart_rate');
            $table->string('blood_pressure');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('data_sleep', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->time('sleeping_time');
            $table->time('deep_sleeping_time');
            $table->integer('wake_up_times');
            $table->double('sleep_points');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_goals');
        Schema::drop('data_sports');
        Schema::drop('data_health');
        Schema::drop('data_sleep');
    }
}
