<?php

namespace Database\Seeders;

use App\Models\Mentor;
use Illuminate\Database\Seeder;

class MentorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mentors = [
            [
                'name' => 'John Doe',
                'email' => 'john.doe@strathmore.edu',
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane.doe@strathmore.edu',
            ]
            ];

            foreach($mentors as $mentor)
            {
              Mentor::create([
                 'name' => $mentor['name'],
                 'email' => $mentor['email']
               ]);
             }
    }
}
