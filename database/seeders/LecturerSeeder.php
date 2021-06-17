<?php

namespace Database\Seeders;

use App\Models\Lecturer;
use Illuminate\Database\Seeder;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lecturers = [
            [
                'name' => 'Dr. Esther Gathenya',
                'email' => 'egathenya@strathmore.edu',
            ],
            [
                'name' => 'Dr. Evans Otieno',
                'email' => 'eotieno@strathmore.edu',
            ],
            [
                'name' => 'Miss Eunice Manyasi',
                'email' => 'emanyasi@strathmore.edu',
            ]
        ];

        foreach($lecturers as $lecturer)
              {
                Lecturer::create([
                    'name' => $lecturer['name'],
                    'email' => $lecturer['email'],
              ]);
        }
    }
}
