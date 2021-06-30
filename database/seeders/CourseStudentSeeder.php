<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_student')->insert(array(
            array('course_id' => 1, 'student_id' => 1),
            array('course_id' => 2, 'student_id' => 2),
        ));
    }
}
