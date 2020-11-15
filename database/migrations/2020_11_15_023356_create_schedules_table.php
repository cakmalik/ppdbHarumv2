<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->string('tanggal');
            $table->string('jam');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');;

        });
    }

  
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
