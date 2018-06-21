<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccommodationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accommodations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('accommodation_type_id');
            $table->string('title', 50);
            $table->string('street', 100);
            $table->string('number', 15);
            $table->string('zip_code', 15);
            $table->string('city', 15);
            $table->string('phone_number_1', 15)->nullable();
            $table->string('phone_number_2', 15)->nullable();
            $table->time('opening_time')->nullable();
            $table->time('closing_time')->nullable();
            $table->longText('description')->nullable();
            $table->decimal('latitude', 12, 8)->nullable();
            $table->decimal('longitude', 12, 8)->nullable();
            $table->boolean('public');
            $table->timestamps();

            $table->foreign('accommodation_type_id')->references('id')->on('accommodation_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accommodations');
    }
}
