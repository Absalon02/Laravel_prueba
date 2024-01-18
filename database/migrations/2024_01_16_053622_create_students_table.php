<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function students()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('group_id')->unsigned();
            $table->foreign("group_id")->references('id')->on("groups")->onDelete('cascade')->onUpdate('cascade');
            

            $table->string('student_name');
            $table->string('student_lastname');
            $table->integer('student_age');
            $table->string('email');
            $table->bigInteger('student_number');
            $table->timestamps();

            $table->foreign("group_id")->references('id')->on("groups");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::defaultStringLength('students');
    }
}
