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
            $table->foreignId('team_id')->comment('id Команды, которой назначена задача')->constrained('teams');
            $table->foreignId('task_type_id')->comment('id Типа задачи')->constrained('task_types');
            $table->string('name')->comment('Название задачи');
            $table->foreignId('status_id')->comment('id Статуса задачи'); //Связь по этому полю в следующей миграции
            $table->dateTimeTz('before_date')->comment('До какого срока нужно выполнить');
            $table->dateTime('solved_at')->comment('Дата выполнения (фактическая)')->nullable();
            $table->timestamps();
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
