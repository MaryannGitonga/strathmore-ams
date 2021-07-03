<?php

namespace Database\Seeders;

use App\Models\LoanItem;
use App\Models\UnitAttendance;
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
            GroupSeeder::class,
            StudentSeeder::class,
            ParentSeeder::class,
            UnitSeeder::class,
            CourseStudentSeeder::class,
            CourseUnitSeeder::class,
            ScoreSeeder::class,
            AssessmentSeeder::class,
            StudentUnitSeeder::class,
            UnitAttendanceSeeder::class,
            FeeSeeder::class,
            LoanItemSeeder::class
        ]);
    }
}
