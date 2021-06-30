<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Score;
use Illuminate\Support\Facades\DB;

class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scores')->insert(array(
            array('student_id' => 1, 'unit_id' => 1, 'score' => 0.00, 'status' => 'pending'),
            array('student_id' => 1, 'unit_id' => 2, 'score' => 0.00, 'status' => 'pending'),
            array('student_id' => 1, 'unit_id' => 3, 'score' => 0.00, 'status' => 'pending'),
            array('student_id' => 1, 'unit_id' => 4, 'score' => 0.00, 'status' => 'pending'),
            array('student_id' => 1, 'unit_id' => 5, 'score' => 0.00, 'status' => 'pending'),
            array('student_id' => 1, 'unit_id' => 6, 'score' => 0.00, 'status' => 'pending'),
            array('student_id' => 1, 'unit_id' => 7, 'score' => 0.00, 'status' => 'pending'),
            array('student_id' => 1, 'unit_id' => 8, 'score' => 0.00, 'status' => 'pending'),
            array('student_id' => 1, 'unit_id' => 9, 'score' => 0.00, 'status' => 'pending'),
            array('student_id' => 1, 'unit_id' => 10, 'score' => 0.00, 'status' => 'pending'),

            array('student_id' => 2, 'unit_id' => 1, 'score' => 0.00, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 2, 'score' => 0.00, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 3, 'score' => 0.00, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 4, 'score' => 0.00, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 5, 'score' => 0.00, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 6, 'score' => 0.00, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 7, 'score' => 0.00, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 8, 'score' => 0.00, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 9, 'score' => 0.00, 'status' => 'pending'),
            array('student_id' => 2, 'unit_id' => 10, 'score' => 0.00, 'status' => 'pending'),
        ));
    }
}
