<?php

namespace Database\Seeders;

use App\Models\UnitAttendance;
use Illuminate\Database\Seeder;

class UnitAttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = [
            [
                'unit_id' => 2,
                'student_id' => 2,
                'start_time' => '2021-05-04 11:15:00',
                'end_time' =>  '2021-05-04 13:15:00',
                'lecture_date' => '2021-05-04',
                'absent' => false,
            ],
            [
                'unit_id' => 2,
                'student_id' => 2,
                'start_time' => '2021-05-08 08:15:00',
                'end_time' =>  '2021-05-08 10:15:00',
                'lecture_date' => '2021-05-08',
                'absent' => true,
            ],
            [
                'unit_id' => 1,
                'student_id' => 2,
                'start_time' => '2021-05-03 11:15:00',
                'end_time' =>  '2021-05-03 13:15:00',
                'lecture_date' => '2021-05-03',
                'absent' => false,
            ],
            [
                'unit_id' => 3,
                'student_id' => 2,
                'start_time' => '2021-05-08 11:15:00',
                'end_time' =>  '2021-05-08 13:15:00',
                'lecture_date' => '2021-05-08',
                'absent' => false,
            ],
        ];

        foreach($records as $record)
        {
            UnitAttendance::create([
                'unit_id' => $record['unit_id'],
                'student_id' => $record['student_id'],
                'start_time' => $record['start_time'],
                'end_time' => $record['end_time'],
                'lecture_date' => $record['lecture_date'],
                'absent' => $record['absent']
            ]);
        }
    }
}
