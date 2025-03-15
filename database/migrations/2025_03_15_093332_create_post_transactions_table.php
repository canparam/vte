<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id')->index();
            $table->string('title',500)->index()->nullable();
            $table->text('content')->nullable();
            $table->string('thumb')->nullable();
            $table->string('type')->nullable();
            $table->bigInteger('views')->default(0);
            $table->text('short_des')->nullable();
            $table->string('slug',500)->index();
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
        Schema::dropIfExists('post_transactions');
    }
}
