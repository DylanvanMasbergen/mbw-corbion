<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class ScannedRoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scan_rounds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->date('day');
            $table->integer('shift');
            $table->unsignedBigInteger('shifttime_id');
            $table->foreign('shifttime_id')->references('id')->on('shift_times');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    
    public function down()
    {
        //
    }
}