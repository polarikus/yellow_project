<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RouleTableRecriate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('roles');
        Schema::create('roles', function (Blueprint $table) {
            $table->id('id')->comment('id роли');
            $table->string('role_name')->comment('Имя роли');
            $table->json('rights')->comment('Права роли');
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
        Schema::create('roles', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->bigIncrements('role_id');
            $table->timestamps();
        });

        Schema::table('roles', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('users');
        });
    }
}
