<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $units =[
            [
                'unit_code' => 'ICS 2207',
                'name' => 'Internet Application Programming',
                'credits' => 3,
                'year' => 2,
                'semester' => 1,
                'course_id'=> 1,
                'lecturer_id' => 2
            ],
            [
                'unit_code' => 'ICS 2102',
                'name' => 'Software Engineering	',
                'credits' => 3,
                'year' => 2,
                'semester' => 1,
                'course_id'=> 1,
                'lecturer_id' => 2
            ],
            [
                'unit_code' => 'ICS 2277',
                'name' => 'Service Based Learning',
                'credits' => 3,
                'year' => 2,
                'semester' => 1,
                'course_id'=> 1,
                'lecturer_id' => 2
            ],
            [
                'unit_code' => 'ICS 2270',
                'name' => 'Discrete Mathematics	',
                'credits' => 3,
                'year' => 2,
                'semester' => 1,
                'course_id'=> 1,
                'lecturer_id' => 2
            ],
            [
                'unit_code' => 'ICS 2177',
                'name' => 'Computer Networks',
                'credits' => 3,
                'year' => 2,
                'semester' => 1,
                'course_id'=> 1,
                'lecturer_id' => 2
            ],
            [
                'unit_code' => 'ICS 2077',
                'name' => 'Principles of Ethics',
                'credits' => 3,
                'year' => 2,
                'semester' => 2,
                'course_id'=> 1,
                'lecturer_id' => 2
            ],
            [
                'unit_code' => 'ICS 2117',
                'name' => 'Probability Statistics',
                'credits' => 3,
                'year' => 2,
                'semester' => 2,
                'course_id'=> 1,
                'lecturer_id' => 2
            ],
            [
                'unit_code' => 'ICS 2877',
                'name' => 'Advanced Networking',
                'credits' => 3,
                'year' => 2,
                'semester' => 2,
                'course_id'=> 1,
                'lecturer_id' => 2
            ],
            [
                'unit_code' => 'ICS 2116',
                'name' => 'Machine Learning',
                'credits' => 3,
                'year' => 2,
                'semester' => 2,
                'course_id'=> 1,
                'lecturer_id' => 2
            ],
            [
                'unit_code' => 'ICS 2217',
                'name' => 'Operating Systems',
                'credits' => 3,
                'year' => 2,
                'semester' => 2,
                'course_id'=> 1,
                'lecturer_id' => 2
            ],
            [
                'unit_code' => 'ICS 3123',
                'name' => 'Human Computer Interaction',
                'credits' => 3,
                'year' => 3,
                'semester' => 1,
                'course_id' => 1,
                'lecturer_id' => 1
            ],
            [
                'unit_code' => 'ICS 3122',
                'name' => 'Web Application',
                'credits' => 3,
                'year' => 3,
                'semester' => 1,
                'course_id'=> 1,
                'lecturer_id' => 3
            ],
            [
                'unit_code' => 'ICS 3120',
                'name' => 'Operations Research',
                'credits' => 3,
                'year' => 3,
                'semester' => 1,
                'course_id'=> 1,
                'lecturer_id' => 2
            ],
            [
                'unit_code' => 'ICS 3143',
                'name' => 'Artificial Intelligence',
                'credits' => 3,
                'year' => 3,
                'semester' => 1,
                'course_id'=> 1,
                'lecturer_id' => 4
            ],
            [
                'unit_code' => 'ICS 3106',
                'name' => 'Automata Theory & Computability',
                'credits' => 3,
                'year' => 3,
                'semester' => 1,
                'course_id'=> 1,
                'lecturer_id' => 10
            ],
            [
                'unit_code' => 'ICS 3101',
                'name' => 'Database Systems',
                'credits' => 3,
                'year' => 3,
                'semester' => 2,
                'course_id'=> 1,
                'lecturer_id' => 9
            ],
            [
                'unit_code' => 'ICS 3179',
                'name' => 'Data Structures & Algorithms',
                'credits' => 3,
                'year' => 3,
                'semester' => 2,
                'course_id'=> 1,
                'lecturer_id' => 5
            ],
            [
                'unit_code' => 'ICS 3277',
                'name' => 'Intro to Programming',
                'credits' => 3,
                'year' => 3,
                'semester' => 2,
                'course_id'=> 1,
                'lecturer_id' => 6
            ],
            [
                'unit_code' => 'ICS 1234',
                'name' => 'Communications Skills',
                'credits' => 3,
                'year' => 3,
                'semester' => 2,
                'course_id'=> null,
                'lecturer_id' => 7
            ],
            [
                'unit_code' => 'ICS 3345',
                'name' => 'Principles of Management',
                'credits' => 3,
                'year' => 3,
                'semester' => 2,
                'course_id'=> 1,
                'lecturer_id' => 8
            ],
            [
                'unit_code' => 'ICS 4277',
                'name' => 'Digital Logic',
                'credits' => 3,
                'year' => 4,
                'semester' => 2,
                'course_id'=> 1,
                'lecturer_id' => 6
            ],
            [
                'unit_code' => 'ICS 4234',
                'name' => 'Linear Algebra',
                'credits' => 3,
                'year' => 4,
                'semester' => 2,
                'course_id'=> 1,
                'lecturer_id' => 7
            ],
            [
                'unit_code' => 'ICS 4345',
                'name' => 'Advanced Database Systems',
                'credits' => 3,
                'year' => 4,
                'semester' => 2,
                'course_id'=> 1,
                'lecturer_id' => 8
            ],
        ];

        foreach($units as $unit)
              {
                Unit::create([
                    'unit_code' => $unit['unit_code'],
                    'name' => $unit['name'],
                    'credits' => $unit['credits'],
                    'year' => $unit['year'],
                    'semester' => $unit['semester'],
                    'course_id' => $unit['course_id'],
                    'lecturer_id' => $unit['lecturer_id']
              ]);
        }
    }
}
