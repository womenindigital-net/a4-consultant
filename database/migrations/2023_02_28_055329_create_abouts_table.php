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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('des')->nullable();
            $table->string('sub_title_one')->nullable();
            $table->longText('sub_title_one_des')->nullable();
            $table->string('sub_title_two')->nullable();
            $table->longText('sub_title_two_des')->nullable();
            $table->string('sub_title_three')->nullable();
            $table->longText('sub_title_three_des')->nullable();
            $table->boolean('status')->nullable();
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
        Schema::dropIfExists('abouts');
    }
};
