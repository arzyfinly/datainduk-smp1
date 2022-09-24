<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->foreignId('class_id')->constrained('student_classes');        
            $table->foreignId('group_id')->constrained('groups');        
            $table->foreignId('personal_id')->nullable()->constrained('personal_student_details')->onDelete('cascade');        
            $table->foreignId('health_id')->nullable()->constrained('health_student_information')->onDelete('cascade');        
            $table->foreignId('residence_id')->nullable()->constrained('residence_student_information')->onDelete('cascade');        
            $table->foreignId('guardian_id')->nullable()->constrained('guardian_student_information')->onDelete('cascade');
            $table->foreignId('previous_education_id')->nullable()->constrained('previous_education_student_information')->onDelete('cascade');        
            $table->foreignId('hobby_id')->nullable()->constrained('student_hobbies')->onDelete('cascade');
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
        Schema::dropIfExists('students');
    }
}
