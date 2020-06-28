<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->text('status_name')->comment('Название статуса');
            $table->boolean('is_stop_time')->comment('Признак постановки задачи на паузу');
        });
        Schema::table('tasks', function (Blueprint $table){
            $table->foreign('status_id')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks', function (Blueprint $table){
            $table->dropForeign(['status_id']);
        });
        Schema::dropIfExists('statuses');
    }
}
