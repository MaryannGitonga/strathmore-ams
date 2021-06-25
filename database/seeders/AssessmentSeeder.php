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
                'score_id' => 1,
            ],
            [
                'name' => 'CAT 2',
                'mark' => '31/40',
                'score_id' => 1,
            ],
            [
                'name' => 'CAT 3',
                'mark' => '26/40',
                'score_id' => 1,
            ],
            [
                'name' => 'Final Exam',
                'mark' => '77.45',
                'score_id' => 1 ,
            ],
            [
                'name' => 'CAT 1',
                'mark' => '10/30' ,
                'score_id' => 2,
            ],
            [
                'name' => 'CAT 2',
                'mark' => '20/40',
                'score_id' => 2,
            ],
            [
                'name' => 'CAT 3',
                'mark' => '30/30',
                'score_id' => 2,
            ],
            [
                'name' => 'Final Exam',
                'mark' => '58.56',
                'score_id' => 2,
            ],
        ];

        foreach($assessments as $assessment)
              {
                Assessment::create([
                    'name' => $assessment['name'],
                    'mark' => $assessment['mark'],
                    'score_id' => $assessment['score_id'],
                   ]);
            }
    }
}
