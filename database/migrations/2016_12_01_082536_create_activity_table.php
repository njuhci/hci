<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('topic');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->tinyInteger('type');
            $table->string('address')->nullable();
            $table->text('content');
            $table->text('remark')->nullable();
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('activity_user', function (Blueprint $table) {
            $table->integer('activity_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('activity_id')->references('id')->on('activities')
                ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('activities');
        Schema::drop('activity_user');
    }
}
