<?php

namespace Database\Seeders;

use App\Models\StudentParent;
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
            ],
            [
                'name' => 'Jane Walker',
                'email' => 'jane.walker@gmail.com',
                'phone' => '0712345678',
                'occupation' => 'Enterprenuer',
                'gender' => 'female',
                'student_id' => 1
            ],
            [
                'name' => 'John Walker',
                'email' => 'john.walker@gmail.com',
                'phone' => '0712345678',
                'occupation' => 'Enterprenuer',
                'gender' => 'male',
                'student_id' => 2
            ],
            [
                'name' => 'Jane Walker',
                'email' => 'jane.walker@gmail.com',
                'phone' => '0712345678',
                'occupation' => 'Enterprenuer',
                'gender' => 'female',
                'student_id' => 2
            ],
            [
                'name' => 'John Walker',
                'email' => 'john.walker@gmail.com',
                'phone' => '0712345678',
                'occupation' => 'Enterprenuer',
                'gender' => 'male',
                'student_id' => 3
            ],
            [
                'name' => 'Jane Walker',
                'email' => 'jane.walker@gmail.com',
                'phone' => '0712345678',
                'occupation' => 'Enterprenuer',
                'gender' => 'female',
                'student_id' => 3
            ],
            [
                'name' => 'John Walker',
                'email' => 'john.walker@gmail.com',
                'phone' => '0712345678',
                'occupation' => 'Enterprenuer',
                'gender' => 'male',
                'student_id' => 4
            ],
            [
                'name' => 'Jane Walker',
                'email' => 'jane.walker@gmail.com',
                'phone' => '0712345678',
                'occupation' => 'Enterprenuer',
                'gender' => 'female',
                'student_id' => 4
            ],
            [
                'name' => 'John Walker',
                'email' => 'john.walker@gmail.com',
                'phone' => '0712345678',
                'occupation' => 'Enterprenuer',
                'gender' => 'male',
                'student_id' => 5

            ],
            [
                'name' => 'Jane Walker',
                'email' => 'jane.walker@gmail.com',
                'phone' => '0712345678',
                'occupation' => 'Enterprenuer',
                'gender' => 'female',
                'student_id' => 5
            ],
            [
                'name' => 'John Walker',
                'email' => 'john.walker@gmail.com',
                'phone' => '0712345678',
                'occupation' => 'Enterprenuer',
                'gender' => 'male',
                'student_id' => 6
            ],
            [
                'name' => 'Jane Walker',
                'email' => 'jane.walker@gmail.com',
                'phone' => '0712345678',
                'occupation' => 'Enterprenuer',
                'gender' => 'female',
                'student_id' => 6
            ],
            [
                'name' => 'John Walker',
                'email' => 'john.walker@gmail.com',
                'phone' => '0712345678',
                'occupation' => 'Enterprenuer',
                'gender' => 'male',
                'student_id' => 7
            ],
            [
                'name' => 'Jane Walker',
                'email' => 'jane.walker@gmail.com',
                'phone' => '0712345678',
                'occupation' => 'Enterprenuer',
                'gender' => 'female',
                'student_id' => 7
            ],
            [
                'name' => 'John Walker',
                'email' => 'john.walker@gmail.com',
                'phone' => '0712345678',
                'occupation' => 'Enterprenuer',
                'gender' => 'male',
                'student_id' => 8
            ],
            [
                'name' => 'Jane Walker',
                'email' => 'jane.walker@gmail.com',
                'phone' => '0712345678',
                'occupation' => 'Enterprenuer',
                'gender' => 'female',
                'student_id' => 8
            ],
            [
                'name' => 'John Walker',
                'email' => 'john.walker@gmail.com',
                'phone' => '0712345678',
                'occupation' => 'Enterprenuer',
                'gender' => 'male',
                'student_id' => 9
            ],
            [
                'name' => 'Jane Walker',
                'email' => 'jane.walker@gmail.com',
                'phone' => '0712345678',
                'occupation' => 'Enterprenuer',
                'gender' => 'female',
                'student_id' => 9
            ],
            [
                'name' => 'John Walker',
                'email' => 'john.walker@gmail.com',
                'phone' => '0712345678',
                'occupation' => 'Enterprenuer',
                'gender' => 'male',
                'student_id' => 10
            ],
            [
                'name' => 'Jane Walker',
                'email' => 'jane.walker@gmail.com',
                'phone' => '0712345678',
                'occupation' => 'Enterprenuer',
                'gender' => 'female',
                'student_id' => 10
            ],
        ];

        foreach($parents as $parent)
              {
                StudentParent::create([
                    'name' => $parent['name'],
                    'email' => $parent['email'],
                    'phone' => $parent['phone'],
                    'occupation' => $parent['occupation'],
                    'gender' => $parent['gender'],
                    'student_id' => $parent['student_id']
              ]);
               }
    }
}
