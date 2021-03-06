<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('blog_id')->nullable();
            $table->string('user_id')->nullable();
            $table->string('title')->nullable();
            $table->string('short_desc')->nullable();
            $table->text('desc')->nullable();
            $table->text('categories')->nullable();
            $table->string('status')->nullable();
            $table->text('documents')->nullable();
            $table->text('isActive')->nullable();
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
        Schema::dropIfExists('blogs');
    }
}
