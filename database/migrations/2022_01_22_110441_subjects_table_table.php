<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SubjectsTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects_table', function (Blueprint $table) {
            $table->id('subject_id');
            $table->unsignedBigInteger('user_id');
            $table->string('subject_name');
            $table->string('subject_detail');
            $table->enum('subject_status', ['Active', 'Inactive'])->default('Active');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects_table');
    }
}
