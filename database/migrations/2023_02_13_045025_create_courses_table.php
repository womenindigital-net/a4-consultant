<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->integer('courseCategoryId')->nullable();
            $table->string('CourseName')->nullable();
            $table->string('courseTitle')->nullable();
            $table->longText('courseDescription')->nullable();
            $table->integer('price')->nullable();
            $table->date('startDate')->nullable();
            $table->time('time')->nullable();
            $table->string('duration')->nullable();
            $table->integer('InstructorId')->nullable();
            $table->string('coursesImage')->nullable();
            $table->string('status')->nullable();
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
};
