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
                'name' => 'Akidiva, Davies Nathan',
                'email' => 'davies.akidiva@strathmore.com',
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'Mugo, Margaret Wambui',
                'email' => 'wambui.mugo@strathmore.com',
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'Sagwa, Susan Ayago',
                'email' => 'susan.sagwa@strathmore.com',
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'Kitaka, Cyprian Kyalo',
                'email' => 'cyprian.kyalo@strathmore.com',
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'Madafali, Whitney Atonya',
                'email' => 'whitney.atonya@strathmore.com',
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'Otieno, Stephanie Achieng',
                'email' => 'otieno.stephanie@strathmore.com',
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'Thomas, Bridget Nyatichi',
                'email' => 'bridget.thomas@strathmore.com',
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'Wariua, Nicholas Kanyi',
                'email' => 'nicholas.wariua@strathmore.com',
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'K\'obara, Joel Rodgers',
                'email' => 'joel.kobara@strathmore.com',
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'Gitonga, Maryann Mwendwa',
                'email' => 'maryann.mwendwa@strathmore.com',
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
