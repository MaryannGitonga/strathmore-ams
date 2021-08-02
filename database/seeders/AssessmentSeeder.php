<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use Illuminate\Support\Facades\DB;

class AssessmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assessments')->insert(array(
            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 1, 'unit_id' => 1),
            array('name' => 'CAT 2', 'mark' => 31.00, 'total_mark' => 40.00, 'weight' => 0.2, 'student_id' => 1, 'unit_id' => 1),
            array('name' => 'Final Exam', 'mark' => 50.00, 'total_mark' => 70.00, 'weight' => 0.6, 'student_id' => 1, 'unit_id' => 1),

            array('name' => 'CAT 1', 'mark' => 10.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 1, 'unit_id' => 2),
            array('name' => 'CAT 2', 'mark' => 25.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 1, 'unit_id' => 2),
            array('name' => 'Final Exam', 'mark' => 60.00, 'total_mark' => 70.00, 'weight' => 0.6, 'student_id' => 1, 'unit_id' => 2),

            array('name' => 'CAT 1', 'mark' => 25.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 1, 'unit_id' => 3),
            array('name' => 'CAT 2', 'mark' => 29.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 1, 'unit_id' => 3),
            array('name' => 'Final Exam', 'mark' => 60.00, 'total_mark' => 70.00, 'weight' => 0.6, 'student_id' => 1, 'unit_id' => 3),

            array('name' => 'CAT 1', 'mark' => 25.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 1, 'unit_id' => 4),
            array('name' => 'CAT 2', 'mark' => 29.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 1, 'unit_id' => 4),
            array('name' => 'Final Exam', 'mark' => 50.00, 'total_mark' => 70.00, 'weight' => 0.6, 'student_id' => 1, 'unit_id' => 4),

            array('name' => 'CAT 1', 'mark' => 27.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 1, 'unit_id' => 5),
            array('name' => 'CAT 2', 'mark' => 29.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 1, 'unit_id' => 5),
            array('name' => 'Final Exam', 'mark' => 40.00, 'total_mark' => 70.00, 'weight' => 0.6, 'student_id' => 1, 'unit_id' => 5),

            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 1, 'unit_id' => 6),
            array('name' => 'CAT 2', 'mark' => 19.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 1, 'unit_id' => 6),
            array('name' => 'Final Exam', 'mark' => 60.00, 'total_mark' => 70.00, 'weight' => 0.6, 'student_id' => 1, 'unit_id' => 6),

            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_id' => 1, 'unit_id' => 7),
            array('name' => 'CAT 2', 'mark' => 20.00, 'total_mark' => 40.00, 'weight' => 0.2, 'student_id' => 1, 'unit_id' => 7),
            array('name' => 'Final Exam', 'mark' => 50.00, 'total_mark' => 70.00, 'weight' => 0.6, 'student_id' => 1, 'unit_id' => 7),

            array('name' => 'CAT 1', 'mark' => 10.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 1, 'unit_id' => 8),
            array('name' => 'CAT 2', 'mark' => 25.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 1, 'unit_id' => 8),
            array('name' => 'Final Exam', 'mark' => 60.00, 'total_mark' => 70.00, 'weight' => 0.6, 'student_id' => 1, 'unit_id' => 8),

            array('name' => 'CAT 1', 'mark' => 25.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 1, 'unit_id' => 9),
            array('name' => 'CAT 2', 'mark' => 29.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 1, 'unit_id' => 9),
            array('name' => 'Final Exam', 'mark' => 60.00, 'total_mark' => 70.00, 'weight' => 0.6, 'student_id' => 1, 'unit_id' => 9),

            array('name' => 'CAT 1', 'mark' => 25.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 1, 'unit_id' => 10),
            array('name' => 'CAT 2', 'mark' => 29.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 1, 'unit_id' => 10),
            array('name' => 'Final Exam', 'mark' => 50.00, 'total_mark' => 70.00, 'weight' => 0.6, 'student_id' => 1, 'unit_id' => 10),

            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 2, 'unit_id' => 1),
            array('name' => 'CAT 2', 'mark' => 31.00, 'total_mark' => 40.00, 'weight' => 0.2, 'student_id' => 2, 'unit_id' => 1),
            array('name' => 'Final Exam', 'mark' => 50.00, 'total_mark' => 70.00, 'weight' => 0.6, 'student_id' => 2, 'unit_id' => 1),

            array('name' => 'CAT 1', 'mark' => 10.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 2, 'unit_id' => 2),
            array('name' => 'CAT 2', 'mark' => 25.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 2, 'unit_id' => 2),
            array('name' => 'Final Exam', 'mark' => 60.00, 'total_mark' => 70.00, 'weight' => 0.6, 'student_id' => 2, 'unit_id' => 2),

            array('name' => 'CAT 1', 'mark' => 25.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 2, 'unit_id' => 3),
            array('name' => 'CAT 2', 'mark' => 29.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 2, 'unit_id' => 3),
            array('name' => 'Final Exam', 'mark' => 60.00, 'total_mark' => 70.00, 'weight' => 0.6, 'student_id' => 2, 'unit_id' => 3),

            array('name' => 'CAT 1', 'mark' => 25.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 2, 'unit_id' => 4),
            array('name' => 'CAT 2', 'mark' => 29.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 2, 'unit_id' => 4),
            array('name' => 'Final Exam', 'mark' => 50.00, 'total_mark' => 70.00, 'weight' => 0.6, 'student_id' => 2, 'unit_id' => 4),

            array('name' => 'CAT 1', 'mark' => 27.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 2, 'unit_id' => 5),
            array('name' => 'CAT 2', 'mark' => 29.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 2, 'unit_id' => 5),
            array('name' => 'Final Exam', 'mark' => 40.00, 'total_mark' => 70.00, 'weight' => 0.6, 'student_id' => 2, 'unit_id' => 5),

            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 2, 'unit_id' => 6),
            array('name' => 'CAT 2', 'mark' => 19.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 2, 'unit_id' => 6),
            array('name' => 'Final Exam', 'mark' => 60.00, 'total_mark' => 70.00, 'weight' => 0.6, 'student_id' => 2, 'unit_id' => 6),

            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_id' => 2, 'unit_id' => 7),
            array('name' => 'CAT 2', 'mark' => 20.00, 'total_mark' => 40.00, 'weight' => 0.2, 'student_id' => 2, 'unit_id' => 7),
            array('name' => 'Final Exam', 'mark' => 50.00, 'total_mark' => 70.00, 'weight' => 0.6, 'student_id' => 2, 'unit_id' => 7),

            array('name' => 'CAT 1', 'mark' => 10.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 2, 'unit_id' => 8),
            array('name' => 'CAT 2', 'mark' => 25.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 2, 'unit_id' => 8),
            array('name' => 'Final Exam', 'mark' => 60.00, 'total_mark' => 70.00, 'weight' => 0.6, 'student_id' => 2, 'unit_id' => 8),

            array('name' => 'CAT 1', 'mark' => 25.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 2, 'unit_id' => 9),
            array('name' => 'CAT 2', 'mark' => 29.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 2, 'unit_id' => 9),
            array('name' => 'Final Exam', 'mark' => 60.00, 'total_mark' => 70.00, 'weight' => 0.6, 'student_id' => 2, 'unit_id' => 9),

            array('name' => 'CAT 1', 'mark' => 25.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 2, 'unit_id' => 10),
            array('name' => 'CAT 2', 'mark' => 29.00, 'total_mark' => 30.00, 'weight' => 0.2, 'student_id' => 2, 'unit_id' => 10),
            array('name' => 'Final Exam', 'mark' => 50.00, 'total_mark' => 70.00, 'weight' => 0.6, 'student_id' => 2, 'unit_id' => 10),
        ));
    }
}
