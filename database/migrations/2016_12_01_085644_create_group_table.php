<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->text('description');
            $table->string('province');
            $table->string('city');
            $table->string('logo_url');
            $table->timestamps();
        });

        Schema::create('group_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('group_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('topic');
            $table->text('content');
            $table->integer('view_count')->unsigned();
            $table->timestamps();

            $table->foreign('group_id')->references('id')->on('groups')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('group_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->text('content');
            $table->timestamps();

            $table->foreign('post_id')->references('id')->on('group_posts')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('group_replies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comment_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('reply_id')->unsigned();
            $table->text('content');
            $table->timestamps();

            $table->foreign('comment_id')->references('id')->on('group_comments')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('reply_id')->references('id')->on('group_replies')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('group_top_posts', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->integer('group_id')->unsigned();
            $table->timestamps();

            $table->foreign('id')->references('id')->on('group_posts')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('group_id')->references('id')->on('groups')
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
        Schema::drop('groups');
        Schema::drop('group_posts');
        Schema::drop('group_comments');
        Schema::drop('group_replies');
        Schema::drop('group_top_posts');
    }
}
