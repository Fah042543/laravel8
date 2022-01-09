<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameAAndChangeRemarkAndDropCToCovid19sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('covid19s', function (Blueprint $table) {
            //
            $table->renameColumn('a', 'total_in_1m');        //เปลี่ยนชื่อ COLUMN
            $table->text('remark')->nullable()->change();    //เปลื่ยน COLUMN TYPE
            $table->dropColumn('c');                         //ลบ column ทิ้ง
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('covid19s', function (Blueprint $table) {
            //
        });
    }
}
