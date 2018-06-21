<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('first_name', 50);
            $table->string('insertion', 15)->nullable();;
            $table->string('last_name', 50);
            $table->string('nick_name', 50);
            $table->date('birthdate');
            $table->string('gender', 1);
            $table->string('phone_number_1', 15)->nullable();
            $table->string('phone_number_2', 15)->nullable();
            $table->longText('description')->nullable();
            $table->boolean('confirmed')->default(0);
            $table->boolean('verified')->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
