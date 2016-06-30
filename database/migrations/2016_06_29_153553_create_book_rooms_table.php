<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookRoomsTable extends Migration
{
    public function up()
    {
        Schema::create('book_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('room_id');
            $table->integer('guest_id');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->timestamp('check_in_date');
            $table->timestamp('check_out_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('book_rooms');
    }
}
