<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('phone', 12)->unique();
            $table->string('password');
            $table->text('address');
            $table->string('id_card');
            $table->integer('role_id');
            $table->rememberToken();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::drop('users');
    }
}
