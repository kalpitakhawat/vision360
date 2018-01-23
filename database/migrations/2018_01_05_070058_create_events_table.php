<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('event_id')->nullable();
            $table->string('title')->nullable();
            $table->text('cover_image')->nullable();
            $table->string('short_desc')->nullable();
            $table->text('desc')->nullable();
            $table->string('time')->nullable();
            $table->string('venue')->nullable();
            $table->string('type')->nullable();
            $table->string('isActive')->nullable();
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
        Schema::dropIfExists('events');
    }
}
