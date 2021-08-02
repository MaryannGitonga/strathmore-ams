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
                'name' => 'Gathenya, Esther',
                'email' => 'egathenya@strathmore.edu',
            ],
            [
                'name' => 'Otieno, Evans',
                'email' => 'eotieno@strathmore.edu',
            ],
            [
                'name' => 'Manyasi, Eunice',
                'email' => 'emanyasi@strathmore.edu',
            ],
            [
                'name' => 'Mukasa, Doreeen',
                'email' => 'dmukasa@strathmore.edu',
            ],
            [
                'name' => 'Kirui, Juliet',
                'email' => 'jkirui@strathmore.edu',
            ],
            [
                'name' => 'Kiyegga, Raymond',
                'email' => 'rkiyegga@strathmore.edu',
            ],
            [
                'name' => 'Mido, Jude Austin',
                'email' => 'jmido@strathmore.edu',
            ],
            [
                'name' => 'Gikera, James',
                'email' => 'jgikera@strathmore.edu',
            ],
            [
                'name' => 'Awuor, Kennedy',
                'email' => 'kawuor@strathmore.edu',
            ],
            [
                'name' => 'Osumaba, John',
                'email' => 'josumba@strathmore.edu',
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
