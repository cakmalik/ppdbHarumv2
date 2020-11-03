<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomesTable extends Migration
{
   
    public function up()
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('amount');
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('incomes');
    }
}
