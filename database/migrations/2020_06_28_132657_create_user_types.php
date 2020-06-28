<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //Типы пользователей в задаче
    public function up()
    {
        Schema::create('user_types', function (Blueprint $table) {
            $table->id();
            $table->string('name', 256)->comment('Описание типа пользователя в задаче');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_types');
    }
}
