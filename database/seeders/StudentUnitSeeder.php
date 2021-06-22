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
            array('student_id' => 1, 'unit_id' => 2, 'status' => 'completed'),
            array('student_id' => 2, 'unit_id' => 3, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 4, 'status' => 'pending'),
            array('student_id' => 3, 'unit_id' => 5, 'status' => 'pending'),
            array('student_id' => 3, 'unit_id' => 6, 'status' => 'completed'),
            array('student_id' => 4, 'unit_id' => 7, 'status' => 'pending'),
            array('student_id' => 4, 'unit_id' => 8, 'status' => 'pending'),
            array('student_id' => 5, 'unit_id' => 1, 'status' => 'pending'),
            array('student_id' => 5, 'unit_id' => 2, 'status' => 'completed'),
            array('student_id' => 6, 'unit_id' => 3, 'status' => 'pending'),
            array('student_id' => 7, 'unit_id' => 4, 'status' => 'pending'),
            array('student_id' => 8, 'unit_id' => 5, 'status' => 'pending'),
            array('student_id' => 9, 'unit_id' => 6, 'status' => 'completed'),
            array('student_id' => 10, 'unit_id' => 7, 'status' => 'pending'),
        ));
    }
}
