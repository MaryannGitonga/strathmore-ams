<?php

namespace Database\Seeders;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = [
            [
                'admission_no' => '120226',
                'avatar' => 'avatar.jpeg',
                'gender' => 'male',
                'semester' => 1,
                'prev_school' => 'Chilton High',
                'phone' => '0712345678',
                'dob' => '1st, April, 2000',
                'national_ID' => '1234567',
                'address' => 1234,
                'postal_code' => 00100,
                'residence' => 'Kilimani',
                'home_county' => 'Nairobi',
                'religion' => 'Christian',
                'personal_email' => 'anonymous_user@gmail.com',
                'result_slip' => null,
                'ID_copy' => null,
                'user_id' => 1,
                'group_id'=> 1,
                'mentor_id' => 1,
                'mentor_last_seen' => '25th, January, 2021'
            ],
            [
                'admission_no' => '120791',
                'avatar' => 'avatar2.png',
                'gender' => 'female',
                'semester' => 1,
                'prev_school' => 'Chilton High',
                'phone' => '0712345678',
                'dob' => '1st, April, 2000',
                'national_ID' => '1234567',
                'address' => 1234,
                'postal_code' => 00100,
                'residence' => 'Kilimani',
                'home_county' => 'Nairobi',
                'religion' => 'Christian',
                'personal_email' => 'anonymous_user@gmail.com',
                'result_slip' => 'result_slip.pdf',
                'ID_copy' => 'ID_copy.pdf',
                'user_id' => 2,
                'group_id'=> 1,
                'mentor_id' => 2,
                'mentor_last_seen' => '25th, January, 2021'
            ],
        ];

        foreach($students as $student)
              {
                Student::create([
                    'admission_no' => $student['admission_no'],
                    'avatar' => $student['avatar'],
                    'gender' => $student['gender'],
                    'semester' => $student['semester'],
                    'prev_school' => $student['prev_school'],
                    'phone' => $student['phone'],
                    'dob' => $student['dob'],
                    'national_ID' => $student['national_ID'],
                    'address' => $student['address'],
                    'postal_code' => $student['postal_code'],
                    'residence' => $student['residence'],
                    'home_county' => $student['home_county'],
                    'religion' => $student['religion'],
                    'personal_email' => $student['personal_email'],
                    'result_slip' => $student['result_slip'],
                    'ID_copy' => $student['ID_copy'],
                    'user_id' => $student['user_id'],
                    'group_id'=> $student['group_id'],
                    'mentor_id' => $student['mentor_id'],
                    'mentor_last_seen' => $student['mentor_last_seen']
              ]);
               }
    }
}
