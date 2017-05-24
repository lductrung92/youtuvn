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
            $table->tinyInteger('is_playlist')->nullable()->default(0);
            $table->string('id_playlist')->nullable()->default('');
            $table->string('count_Video')->nullable()->default('');
            $table->string('time_video')->nullable()->default('');
            $table->string('id_video');
            $table->integer('viewCount')->nullable()->default(0);
            $table->integer('likeCount')->nullable()->default(0);
            $table->integer('dislikeCount')->nullable()->default(0);
            $table->string('author')->nullable()->default('');
            $table->text('description')->nullable();
            $table->text('keyword')->nullable();
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
