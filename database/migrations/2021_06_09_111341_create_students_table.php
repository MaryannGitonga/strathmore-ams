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
            $table->enum('gender', ['male', 'female']);
            $table->integer('semester');
            $table->string('prev_school');
            $table->string('phone');
            $table->string('dob');
            $table->integer('national_ID');
            $table->integer('address');
            $table->integer('postal_code');
            $table->string('residence');
            $table->string('home_county');
            $table->string('religion');
            $table->string('personal_email');
            $table->string('result_slip')->nullable();
            $table->string('ID_copy')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('group_id')->constrained();
            $table->foreignId('mentor_id')->constrained();
            $table->string('mentor_last_seen');
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
