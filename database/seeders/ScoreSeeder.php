<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Score;

class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $scores = [
            [
                'student_id' => 1, 
                'unit_id' => 1, 
                'score' => 87.12, 
                'status' => 'completed'
            ],
            [
                'student_id' => 1, 
                'unit_id' => 2, 
                'score' => 55.91, 
                'status' => 'completed',
            ],
            [
                'student_id' => 2, 
                'unit_id' => 3, 
                'score' => 60.66, 
                'status' => 'completed',
            ],
            [
                'student_id' => 2, 
                'unit_id' => 4, 
                'score' => 73.51, 
                'status' => 'completed' ,
            ],
            [
                'student_id' => 3, 
                'unit_id' => 5, 
                'score' => 80.32, 
                'status' => 'completed',
            ],
            [
                'student_id' => 3, 
                'unit_id' => 6, 
                'score' => 44.78, 
                'status' => 'completed',
            ],
            [
                'student_id' => 4, 
                'unit_id' => 7, 
                'score' => 0.00, 
                'status' => 'pending',
            ],
            [
                'student_id' => 4, 
                'unit_id' => 8, 
                'score' => 0.00, 
                'status' => 'pending',
            ],
            [
                'student_id' => 5, 'unit_id' => 1, 'score' => 60.28, 'status' => 'completed', 
            ],
            [
                'student_id' => 5, 'unit_id' => 2, 'score' => 42.45, 'status' => 'completed',
            ],
            [
                'student_id' => 6, 'unit_id' => 3, 'score' => 76.20, 'status' => 'completed',
            ],
            [
                'student_id' => 7, 'unit_id' => 4, 'score' => 56.6, 'status' => 'completed', 
            ],
            [
                'student_id' => 8, 'unit_id' => 5, 'score' => 79.0, 'status' => 'completed', 
            ],
            [
                'student_id' => 9, 'unit_id' => 6, 'score' => 80.34, 'status' => 'completed',
            ],
            [
                'student_id' => 10, 'unit_id' => 7,'score' => 77.62, 'status' => 'completed',
            ],

            ];

          
        foreach($scores as $score)
        {
          Score::create([
             'student_id' => $score['student_id'],
             'unit_id' => $score['unit_id'],
             'score' => $score['score'],
             'status' => $score['status'],
           ]);
         }
        }
}
