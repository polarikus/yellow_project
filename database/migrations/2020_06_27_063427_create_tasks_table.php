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
            $table->string('name')->comment('Название задачи');
            $table->foreignId('team_id')->comment('id Команды, которой назначена задача')->constrained();
            $table->foreignId('type_task_id')->comment('id Типа задачи')->constrained('tasks');
            $table->foreignId('status_id')->comment('id Статуса задачи'); //Связь по этому полю в следующей миграции
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
