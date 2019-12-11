<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScannedpointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scanned_points', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->time('scanned_time');
            $table->unsignedBigInteger('operator_id');
            $table->foreign('operator_id')->references('id')->on('employees');
            $table->unsignedBigInteger('scanround_id');
            $table->foreign('scanround_id')->references('id')->on('scan_rounds');
            $table->unsignedBigInteger('Scanpoint_id');
            $table->foreign('scanpoint_id')->references('id')->on('scanpoints');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scanned_points');
    }
}
