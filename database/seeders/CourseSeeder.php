<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                'name' => 'Informatics and Computer Science',
                'status' => 'pending',
            ],
            [
                'name' => 'Electrical & Electronics Engineering',
                'status' => 'pending',
            ]
        ];

        foreach($courses as $course)
            {
              Course::create([
                 'name' => $course['name'],
                 'status' => $course['status']
               ]);
             }
    }
}
