<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;

class AssessmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $assessments =[
            [
                'name' => 'CAT 1',
                'mark' => '20/30' ,
                'student_unit_id' => 1,
            ],
            [
                'name' => 'CAT 2',
                'mark' => '31/40',
                'student_unit_id' => 1,
            ],
            [
                'name' => 'exam',
                'mark' => '77.45',
                'student_unit_id' => 1 ,
            ],
            [
                'name' => 'CAT 1',
                'mark' => '10/30' ,
                'student_unit_id' => 2,
            ],
            [
                'name' => 'CAT 2',
                'mark' => '20/40',
                'student_unit_id' => 2,
            ],
            [
                'name' => 'exam',
                'mark' => '58.56',
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
