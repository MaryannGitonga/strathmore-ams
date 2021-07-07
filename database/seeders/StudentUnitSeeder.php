<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_unit')->insert(array(
            array('student_id' => 1, 'unit_id' => 1, 'status' => 'pending'),
            array('student_id' => 1, 'unit_id' => 2, 'status' => 'pending'),
            array('student_id' => 1, 'unit_id' => 3, 'status' => 'pending'),
            array('student_id' => 1, 'unit_id' => 4, 'status' => 'pending'),
            array('student_id' => 1, 'unit_id' => 5, 'status' => 'pending'),
            array('student_id' => 1, 'unit_id' => 6, 'status' => 'pending'),
            array('student_id' => 1, 'unit_id' => 7, 'status' => 'pending'),
            array('student_id' => 1, 'unit_id' => 8, 'status' => 'pending'),
            array('student_id' => 1, 'unit_id' => 9, 'status' => 'pending'),
            array('student_id' => 1, 'unit_id' => 10, 'status' => 'pending'),

            array('student_id' => 2, 'unit_id' => 1, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 2, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 3, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 4, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 5, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 6, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 7, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 8, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 9, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 10, 'status' => 'pending'),
        ));
    }
}
