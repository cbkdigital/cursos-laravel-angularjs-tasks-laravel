<?php

use Illuminate\Database\Migrations\Migration;

class Tasks extends Migration
{

    public function up()
    {
        Schema::create('tasks', function ($table) {
            $table->increments('id');
            $table->string('titulo');
            $table->integer('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExist('users');
    }

}
