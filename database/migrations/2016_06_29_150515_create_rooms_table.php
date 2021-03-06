<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('bed');
            $table->string('number');
            $table->integer('price');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('rooms');
    }
}
