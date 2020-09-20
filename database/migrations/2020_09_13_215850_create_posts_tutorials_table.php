<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTutorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_tutorials', function (Blueprint $table) {
            $table->unsignedBigInteger('tutorial');
            $table->unsignedBigInteger('post');
            $table->foreign('tutorial')->references('id')->on('tutorials')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('post')->references('id')->on('posts')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['post','tutorial']);
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
        Schema::dropIfExists('posts_tutorials');
    }
}
