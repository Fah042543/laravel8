<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFahsaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tablefahsai', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('Code_Student')->nullable();
            $table->string('Weight')->nullable();
            $table->float('Height')->nullable();
            $table->date('Birthday')->nullable();
            $table->string('Phone_Number')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tablefahsai');
    }
}
