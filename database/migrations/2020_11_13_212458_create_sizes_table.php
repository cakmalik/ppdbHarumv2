<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSizesTable extends Migration
{
    public function up()
    {
        Schema::create('sizes', function (Blueprint $table) {
            $table->id();
            $table->string('atasan');
            $table->string('bawahan');
            $table->string('jilbab')->nullable();
            $table->foreignId('student_id');
            $table->timestamps();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sizes');
    }
}
