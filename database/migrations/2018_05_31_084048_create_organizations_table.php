<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('organization_type_id');
            $table->string('title', 50);
            $table->string('street', 100);
            $table->string('number', 15);
            $table->string('zip_code', 15);
            $table->string('city', 15);
            $table->string('phone_number_1', 15)->nullable();
            $table->string('phone_number_2', 15)->nullable();
            $table->longText('description')->nullable();
            $table->boolean('confirmed')->default(0);
            $table->boolean('verified')->default(0);
            $table->timestamps();

            $table->foreign('organization_type_id')->references('id')->on('organization_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizations');
    }
}
