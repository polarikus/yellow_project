<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewAllTsks extends Migration
{
    /**
     * Создание представления для всех задач
     *
     * @return void
     */
    public function up()
    {
        \Illuminate\Support\Facades\DB::select('
        CREATE VIEW all_tasks
        AS
        SELECT tasks.id AS task_id, team_id, tasks.name AS task_name, status_id, statuses.name AS status_name, before_date, tasks.solved_at, tasks.created_at, tasks.updated_at, teams.name AS team_name,
        initiator.iniciator_id AS initiator_id, initiator.iniciator_name AS iniciator_name, exec.exec_name, exec_id
        FROM tasks
        -- Берем и крепим данные о инициаторе задачи
        LEFT JOIN (
        SELECT `name` AS iniciator_name, user_id AS iniciator_id, login AS iniciator_login, task_id AS iniciator_taskFrom FROM task_user_user_type
        INNER JOIN users AS init_usr
        ON user_id = init_usr.id
        WHERE user_type_id = 1
        ) AS initiator
        ON initiator.iniciator_taskFrom = tasks.id
        -- Прикрипляем исполнителя
        LEFT JOIN (
        SELECT `name` AS exec_name, user_id AS exec_id, login AS exec_login, task_id AS exec_taskFrom FROM task_user_user_type
        INNER JOIN users
        ON user_id = users.id
        WHERE user_type_id = 3
        ) AS exec
        ON exec.exec_taskFrom = tasks.id

        -- Прикрепляем команду
        INNER JOIN teams
        ON tasks.team_id = teams.id
        -- Прикрепляем статусы
        INNER JOIN statuses
        ON tasks.status_id = statuses.id');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \Illuminate\Support\Facades\DB::select('DROP VIEW IF EXISTS all_tasks');
    }
}
