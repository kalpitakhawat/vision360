<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('f_name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->unique();
            $table->string('type');
            $table->string('password')->nullable();
            $table->string('sub_cast')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('gender')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('pincode')->nullable();
            $table->text('edu_qualification')->nullable();
            $table->text('expertise')->nullable();
            $table->string('present_activity')->nullable();
            $table->text('company_name_address')->nullable();
            $table->string('nature_of_busines')->nullable();
            $table->string('company_pincode')->nullable();
            $table->text('about')->nullable();
            $table->string('website')->nullable();
            $table->text('avtar')->nullable();
            $table->string('provider')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('status')->nullable();
            $table->string('provider_id')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
