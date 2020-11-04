<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('titlemenu_id');
            $table->string('name');
            $table->string('url');
            $table->string('icon');
            $table->string('is_active');
            $table->integer('posisi');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
