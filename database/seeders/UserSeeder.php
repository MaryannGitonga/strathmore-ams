<?php

namespace Database\Seeders;

use App\Models\User as ModelsUser;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Doe, John',
                'email' => 'john.doe@strathmore.edu',
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'Doe, Jane',
                'email' => 'jane.doe@strathmore.edu',
                'password' => bcrypt('12345678'),
            ],
        ];

        foreach($users as $user)
              {
                User::create([
                   'name' => $user['name'],
                   'email' => $user['email'],
                   'password' => $user['password']
                 ]);
               }
    }
}
