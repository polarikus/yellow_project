<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskUserUserType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_user_user_type', function (Blueprint $table) {
            $table->foreignId('task_id')->comment('id Задачи')->constrained('tasks');
            $table->foreignId('user_id')->comment('id пользователя')->constrained('users');
            $table->foreignId('user_type_id')->comment('Роль пользователя в задаче')->constrained('user_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_user_user_type');
    }
}
