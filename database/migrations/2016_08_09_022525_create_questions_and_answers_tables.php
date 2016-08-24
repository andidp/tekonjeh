<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsAndAnswersTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
			$table->string('title');
			$table->mediumText('body');
            $table->timestamps();
        });
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('question_id')->unsigned()->default(0);
			$table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
			$table->string('title');
			$table->text('body');
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
        Schema::drop('questions');
        Schema::drop('answers');
    }
}
