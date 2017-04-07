<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_info', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->string('real_name')->nullable();
            $table->string('nickname')->nullable();
            $table->tinyInteger('gender');
            $table->string('province');
            $table->string('city');
            $table->date('birthday');
            $table->text('introduction')->nullable();
            $table->string('avatar_url');

            $table->foreign('id')->references('id')->on('users')
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
        Schema::drop('user_info');
    }
}
