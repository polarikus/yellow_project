<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PKTeamsChange extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('teams');
        Schema::create('teams', function (Blueprint $table) {
            $table->id('id')->comment('id команды');
            $table->string('title')->comment('Название команды')->nullable();
            $table->foreignId('creator_id')->comment('id создателя')->nullable();
            $table->timestamps();
        });
        Schema::table('teams', function (Blueprint $table) {
            $table->foreign('creator_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
        Schema::create('teams', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('title');
            $table->bigIncrements('manager_id');
            $table->timestamps();
        });
        Schema::table('teams', function (Blueprint $table) {
            $table->foreign('manager_id')->references('id')->on('managers');
        });
    }
}
