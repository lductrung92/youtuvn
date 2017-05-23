<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYoutubesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('youtubes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cid')->unsigned();
            $table->integer('pid')->unsigned();
            $table->integer('uid')->unsigned();
            $table->string('title')->unique();
            $table->string('alias');
            $table->string('id_video');
            $table->string('time_video')->nullable()->default('');
            $table->integer('viewCount')->nullable()->default(0);
            $table->integer('likeCount')->nullable()->default(0);
            $table->integer('dislikeCount')->nullable()->default(0);
            $table->string('author')->nullable()->default('');
            $table->text('description');
            $table->text('keyword');
            $table->tinyInteger('status')->nullable()->default(0);
            $table->foreign('cid')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('uid')->references('id')->on('users');
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
        Schema::dropIfExists('youtubes');
    }
}
