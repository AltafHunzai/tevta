<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('Std_id')->nullable();
            $table->string('First_Name')->nullable();
            $table->string('Last_Name')->nullable();
            $table->string('Std_Gender')->nullable();
            $table->string('Std_Religion')->nullable();
            $table->string('Std_D_O_B')->nullable();
            $table->string('Std_CNIC')->nullable();
            $table->string('Std_Nationality')->nullable();
            $table->string('Std_Number')->nullable();
            $table->string('Std_Email')->nullable();
            $table->string('Course_select')->nullable();
            $table->string('Course_Knowledge')->nullable();
            $table->string('Std_Pic')->nullable();
            $table->string('Std_Domicile')->nullable();
            $table->string('Guardian_Name')->nullable();
            $table->string('Guardian_Occupation')->nullable();
            $table->string('Guardian_Email')->nullable();
            $table->string('Guardian_Number')->nullable();
            $table->string('Guardian_Cnic')->nullable();
            $table->string('Guardian_Relation')->nullable();
            $table->string('Std_Education')->nullable();
            $table->string('Edu_Institute')->nullable();
            $table->string('Y_O_P')->nullable();
            $table->string('undertaking')->nullable();
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
        Schema::dropIfExists('enrollments');
    }
}
