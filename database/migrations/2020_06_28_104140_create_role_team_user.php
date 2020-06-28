<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleTeamUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //Таблица для связи многие ко многим
    public function up()
    {
        Schema::create('role_team_user', function (Blueprint $table) {
            $table->foreignId('role_id')->constrained();
            $table->foreignId('team_id')->constrained();
            $table->foreignId('user_id')->constrained();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_team_user');
    }
}
