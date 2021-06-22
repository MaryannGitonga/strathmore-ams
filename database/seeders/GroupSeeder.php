<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = [
            [
                'name' => 'ICS 3A May 2021',
                'course_id' => 1,
                'year' => 3
            ],
            [
                'name' => 'ICS 3B May 2021',
                'course_id' => 1,
                'year' => 3
            ],
            [
                'name' => 'EEE 3A May 2021',
                'course_id' => 2,
                'year' => 3
            ],
        ];

        foreach($groups as $group)
              {
                Group::create([
                    'name' => $group['name'],
                    'course_id' => $group['course_id'],
                    'year' => $group['year']
              ]);
               }
    }
}
