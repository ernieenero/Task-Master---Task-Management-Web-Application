<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaskTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_table', function (Blueprint $table) {
            $table->id('task_id');
            $table->unsignedBigInteger('subject_id');
            $table->string('task_detail');
            $table->string('task_name');
            $table->date('task_deadline');
            $table->timestamps();

            $table->foreign('subject_id')->references('subject_id')->on('subjects_table')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_table');
    }
}
