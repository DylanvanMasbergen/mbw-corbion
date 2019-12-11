<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScanpointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scanpoints', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('barcode');
            $table->mediumText('location');

            //foreign key 
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('scan_departments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scanpoints');
    }
}
