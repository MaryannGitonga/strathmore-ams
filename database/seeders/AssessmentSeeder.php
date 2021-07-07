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
            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 1),
            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 1),
            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 1),

            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 2),
            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 2),
            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 2),

            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 3),
            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 3),
            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 3),

            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 4),
            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 4),
            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 4),

            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 5),
            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 5),
            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 5),

            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 6),
            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 6),
            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 6),

            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 7),
            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 7),
            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 7),

            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 8),
            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 8),
            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 8),

            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 9),
            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 9),
            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 9),

            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 10),
            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 10),
            array('name' => 'CAT 1', 'mark' => 20.00, 'total_mark' => 30.00, 'weight' => 0.3, 'student_unit_id' => 10),

        ));
        $assessments =[
            [
                'name' => 'CAT 1',
                'mark' => 20.00 ,
                'total_mark' => 30.00 ,
                'weight' => 0.3 ,
                'student_unit_id' => 1,
            ],
            [
                'name' => 'CAT 2',
                'mark' => 31,
                'total_mark' => 40.00 ,
                'weight' => 0.3 ,
                'student_unit_id' => 1,
            ],
            [
                'name' => 'Final_Exam',
                'mark' => 50,
                'total_mark' => 70.00 ,
                'weight' => 0.6 ,
                'student_unit_id' => 1 ,
            ],

            [
                'name' => 'CAT 1',
                'mark' => 20.00 ,
                'total_mark' => 30.00 ,
                'weight' => 0.3 ,
                'student_unit_id' => 2,
            ],
            [
                'name' => 'CAT 2',
                'mark' => 31,
                'total_mark' => 40.00 ,
                'weight' => 0.3 ,
                'student_unit_id' => 2,
            ],
            [
                'name' => 'Final_Exam',
                'mark' => 50,
                'total_mark' => 70.00 ,
                'weight' => 0.6 ,
                'student_unit_id' => 2,
            ],
        ];

        foreach($assessments as $assessment)
              {
                Assessment::create([
                    'name' => $assessment['name'],
                    'mark' => $assessment['mark'],
                    'student_unit_id' => $assessment['student_unit_id'],
                   ]);
            }
    }
}
