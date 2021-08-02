<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_unit')->insert(array(
            array('course_id' => 1, 'unit_id' => 1),
            array('course_id' => 1, 'unit_id' => 2),
            array('course_id' => 1, 'unit_id' => 3),
            array('course_id' => 1, 'unit_id' => 4),
            array('course_id' => 1, 'unit_id' => 5),
            array('course_id' => 1, 'unit_id' => 6),
            array('course_id' => 1, 'unit_id' => 7),
            array('course_id' => 1, 'unit_id' => 8),
            array('course_id' => 1, 'unit_id' => 9),
            array('course_id' => 1, 'unit_id' => 10),
            array('course_id' => 2, 'unit_id' => 1),
            array('course_id' => 2, 'unit_id' => 2),
            array('course_id' => 2, 'unit_id' => 3),
            array('course_id' => 2, 'unit_id' => 4),
            array('course_id' => 2, 'unit_id' => 5),
            array('course_id' => 2, 'unit_id' => 6),
            array('course_id' => 2, 'unit_id' => 7),
            array('course_id' => 2, 'unit_id' => 8),
            array('course_id' => 2, 'unit_id' => 9),
            array('course_id' => 2, 'unit_id' => 10),
        ));
    }
}
