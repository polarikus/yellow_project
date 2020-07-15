<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UnicqueRoleTeamUserId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('role_team_user', function (Blueprint $table){
            $table->unique(['role_id', 'team_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('role_team_user', function (Blueprint $table){
            $table->dropUnique(['role_id', 'team_id', 'user_id']);
        });
    }
}
