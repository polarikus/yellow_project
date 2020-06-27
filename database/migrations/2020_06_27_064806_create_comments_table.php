<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('task_id')->comment('id Задачи');
            $table->longText('comment_next')->comment('Текст комментария');
            $table->bigInteger('user_id')->comment('id Пользователя, оставившего комментарий');
            $table->bigInteger('type_of_comment')->comment('id Типа комментария');
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
        Schema::dropIfExists('comments');
    }
}
