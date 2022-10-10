<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_image')->nullable();
            $table->string('course_name')->nullable();
            $table->string('course_overview')->nullable();
            $table->string('course_criteria1')->nullable();
            $table->string('course_criteria2')->nullable();
            $table->string('course_criteria3')->nullable();
            $table->string('course_criteria4')->nullable();
            $table->string('course_criteria5')->nullable();
            $table->string('course_criteria6')->nullable();
            $table->string('course_criteria7')->nullable();
            $table->string('course_criteria8')->nullable();
            $table->string('course_criteria9')->nullable();
            $table->longText('course_curriculum')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
