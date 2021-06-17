<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CourseSeeder::class,
            MentorSeeder::class,
            LecturerSeeder::class,
            ParentSeeder::class,
            GroupSeeder::class,
            StudentSeeder::class,
            UnitSeeder::class,
            CourseStudentSeeder::class,
            CourseUnitSeeder::class,
            StudentUnitSeeder::class
        ]);
    }
}
