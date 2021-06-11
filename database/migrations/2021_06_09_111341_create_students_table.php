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
            $table->integer('admission_no')->unique();
            $table->string('avatar')->nullable()->default('avatar.png');
            $table->integer('year');
            $table->string('intake');
            $table->string('prev_school');
            $table->string('phone');
            $table->string('dob');
            $table->integer('national_ID');
            $table->string('address');
            $table->string('residence');
            $table->string('home_county');
            $table->string('religion');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('mentor_id')->constrained();
            $table->string('last_seen');
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
