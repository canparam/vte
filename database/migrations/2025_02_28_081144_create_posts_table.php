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
            $table->string('title',500)->index()->nullable();
            $table->text('content')->nullable();
            $table->string('thumb')->nullable();
            $table->string('type')->nullable();
            $table->json('extra')->nullable();
            $table->bigInteger('views')->default(0);
            $table->json('categories')->nullable();
            $table->json('tags')->nullable();
            $table->text('short_des')->nullable();
            $table->string('slug',500)->index();
            $table->unsignedBigInteger('user_id')->index()->nullable();
            $table->json('seo')->nullable();
            $table->softDeletes();
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
