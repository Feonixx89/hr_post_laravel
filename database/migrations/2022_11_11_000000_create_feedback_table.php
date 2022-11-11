<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Запустить миграцию.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->string('phone');
            $table->text('message');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Обратить миграции.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('feedback');
    }
}
