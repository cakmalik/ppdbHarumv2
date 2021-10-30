<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{

    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('token');
            // pribadi
            $table->string('full_name');
            $table->string('nick_name');
            $table->string('school_origin');
            $table->string('gender');
            $table->string('place_birth');
            $table->date('date_birth');
            $table->string('special_needs');
            $table->integer('jumlah_saudara');
            $table->string('living');
            $table->string('address');
            $table->string('rtrw');
            $table->integer('postalcode');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('provinsi');
            //ayah
            $table->string('dad');
            $table->string('dad_edu');
            $table->string('dad_occupation');
            $table->string('dad_income');
            $table->string('dad_phone');
            // mom
            $table->string('mom');
            $table->string('mom_edu');
            $table->string('mom_occupation');
            $table->string('mom_income');
            $table->string('mom_phone');
            $table->string('email');

            $table->integer('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
