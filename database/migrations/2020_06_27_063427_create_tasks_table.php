<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('team_id')->comment('id Команды, которой назначена задача');
            $table->bigInteger('type_task_id')->comment('id Типа задачи');
            $table->bigInteger('initiator_id')->comment('id Инициатора задачи');
            $table->bigInteger('executor_id')->comment('id Ответственного исполнителя задачи');
            $table->bigInteger('status_id')->comment('id Статуса задачи');
            $table->timestamps();
            $table->dateTimeTz('period_of_execution_before')->comment('До какого срока нужно выполнить');
            $table->dateTime('solved_at')->comment('Дата выполнения (фактическая)');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
