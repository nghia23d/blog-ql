<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('lead');
            $table->text('content');

            //topic
            $table->unsignedBigInteger('topic_id')->index()->nullable();
            $table->foreign('topic_id')->references('id')->on('topics');

            //user
            $table->unsignedBigInteger('author_id')->index()->nullable();
            $table->foreign('author_id')->references('id')->on('users');

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
        Schema::dropIfExists('posts');
    }
}
