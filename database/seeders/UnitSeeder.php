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
                'unit_code' => 'ICS 3123',
                'name' => 'Human Computer Interaction',
                'credits' => 3,
                'year' => 3,
                'semester' => 1,
                'lecturer_id' => 1
            ],
            [
                'unit_code' => 'ICS 3122',
                'name' => 'Web Application',
                'credits' => 3,
                'year' => 3,
                'semester' => 1,
                'lecturer_id' => 3
            ],
            [
                'unit_code' => 'ICS 3120',
                'name' => 'Operations Research',
                'credits' => 3,
                'year' => 3,
                'semester' => 1,
                'lecturer_id' => 2
            ],
            [
                'unit_code' => 'ICS 3143',
                'name' => 'Artificial Intelligence',
                'credits' => 3,
                'year' => 3,
                'semester' => 1,
                'lecturer_id' => 2
            ],
            [
                'unit_code' => 'ICS 3106',
                'name' => 'Automata Theory & Computability',
                'credits' => 3,
                'year' => 3,
                'semester' => 1,
                'lecturer_id' => 2
            ],
            [
                'unit_code' => 'ICS 3101',
                'name' => 'Advanced Database Systems',
                'credits' => 3,
                'year' => 3,
                'semester' => 1,
                'lecturer_id' => 1
            ],
            [
                'unit_code' => 'ICS 3179',
                'name' => 'Data Structures & Algorithms',
                'credits' => 3,
                'year' => 3,
                'semester' => 1,
                'lecturer_id' => 3
            ],
            [
                'unit_code' => 'ICS 3277',
                'name' => 'Intro to Programming',
                'credits' => 3,
                'year' => 3,
                'semester' => 1,
                'lecturer_id' => 2
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
                    'lecturer_id' => $unit['lecturer_id']
              ]);
        }
    }
}
