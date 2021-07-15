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
            array('student_id' => 1, 'unit_id' => 1, 'status' => 'completed'),
            array('student_id' => 1, 'unit_id' => 2, 'status' => 'completed'),
            array('student_id' => 1, 'unit_id' => 3, 'status' => 'completed'),
            array('student_id' => 1, 'unit_id' => 4, 'status' => 'completed'),
            array('student_id' => 1, 'unit_id' => 5, 'status' => 'completed'),
            array('student_id' => 1, 'unit_id' => 6, 'status' => 'completed'),
            array('student_id' => 1, 'unit_id' => 7, 'status' => 'completed'),
            array('student_id' => 1, 'unit_id' => 8, 'status' => 'completed'),
            array('student_id' => 1, 'unit_id' => 9, 'status' => 'completed'),
            array('student_id' => 1, 'unit_id' => 10, 'status' => 'completed'),

            array('student_id' => 2, 'unit_id' => 1, 'status' => 'completed'),
            array('student_id' => 2, 'unit_id' => 2, 'status' => 'completed'),
            array('student_id' => 2, 'unit_id' => 3, 'status' => 'completed'),
            array('student_id' => 2, 'unit_id' => 4, 'status' => 'completed'),
            array('student_id' => 2, 'unit_id' => 5, 'status' => 'completed'),
            array('student_id' => 2, 'unit_id' => 6, 'status' => 'completed'),
            array('student_id' => 2, 'unit_id' => 7, 'status' => 'completed'),
            array('student_id' => 2, 'unit_id' => 8, 'status' => 'completed'),
            array('student_id' => 2, 'unit_id' => 9, 'status' => 'completed'),
            array('student_id' => 2, 'unit_id' => 10, 'status' => 'completed'),

            array('student_id' => 1, 'unit_id' => 11, 'status' => 'pending'),
            array('student_id' => 1, 'unit_id' => 12, 'status' => 'pending'),
            array('student_id' => 1, 'unit_id' => 13, 'status' => 'pending'),
            array('student_id' => 1, 'unit_id' => 14, 'status' => 'pending'),
            array('student_id' => 1, 'unit_id' => 15, 'status' => 'pending'),
            array('student_id' => 1, 'unit_id' => 16, 'status' => 'pending'),
            array('student_id' => 1, 'unit_id' => 17, 'status' => 'pending'),
            array('student_id' => 1, 'unit_id' => 18, 'status' => 'pending'),
            array('student_id' => 1, 'unit_id' => 19, 'status' => 'pending'),
            array('student_id' => 1, 'unit_id' => 20, 'status' => 'pending'),

            array('student_id' => 2, 'unit_id' => 11, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 12, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 13, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 14, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 15, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 16, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 17, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 18, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 19, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 20, 'status' => 'pending'),
        ));
    }
}
