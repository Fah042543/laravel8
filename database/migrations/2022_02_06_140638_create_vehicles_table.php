<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration

{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('brand')->nullable();
            $table->string('serie')->nullable();
            $table->string('color')->nullable();
            $table->integer('year')->nullable();
            $table->integer('mileage')->nullable();
            $table->integer('user_id')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vehicles');
    }
}
