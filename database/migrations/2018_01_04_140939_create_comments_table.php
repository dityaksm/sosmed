<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->primary('id');
            $table->uuid('id');
            $table->unique('id');
            $table->string('post_id');
            $table->string('user_id');
            $table->text('comment');
            $table->timestamps();
        });


//        Schema::table('comments', function (Blueprint $table) {
//            $table->foreign('user_id')->references('id')->on('users');
//            $table->foreign('post_id')->references('id')->on('posts');
//        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
