<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->timestamps();
            $table->string('no')->nullable();
            $table->string('type')->nullable();
            $table->date('issue_date')->nullable();
            $table->date('expire_date')->nullable();
            $table->string('name')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('id_no')->nullable();
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
        Schema::drop('profiles');
    }
}
