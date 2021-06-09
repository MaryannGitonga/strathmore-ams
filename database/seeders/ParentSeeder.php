<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ParentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parents = [
            [
                'name' => 'John Walker',
                'email' => 'john.walker@gmail.com',
                'phone' => '0712345678',
                'occupation' => 'Enterprenuer',
                'gender' => 'male',
                'student_id' => 1
            ]
        ];
    }
}
