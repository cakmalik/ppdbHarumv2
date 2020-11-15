<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uniforms', function (Blueprint $table) {
            $table->id();
            $table->string('gender');
            $table->string('kode');
            $table->string('category');
            $table->string('info');
            $table->integer('s');
            $table->integer('m');
            $table->integer('l');
            $table->integer('xl');
            $table->integer('xxl');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('uniforms');
    }
}
