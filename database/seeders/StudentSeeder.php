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
                'avatar' => 'avatar.png',
                'year' => 3,
                'intake' => 'April, 2018',
                'prev_school' => 'Chilton High',
                'phone' => '0712345678',
                'dob' => '1st, April, 2000',
                'national_ID' => '1234567',
                'address' => '1234-00100',
                'residence' => 'Kilimani',
                'home_county' => 'Nairobi',
                'religion' => 'Christian',
                'user_id' => 1,
                'mentor_id' => 1,
                'last_seen' => '25th, January, 2021'
            ],
            [
                'admission_no' => '120791',
                'avatar' => 'avatar.png',
                'year' => 3,
                'intake' => 'July, 2018',
                'prev_school' => 'Chilton High',
                'phone' => '0712345678',
                'dob' => '1st, April, 2000',
                'national_ID' => '1234567',
                'address' => '1234-00100',
                'residence' => 'Kilimani',
                'home_county' => 'Nairobi',
                'religion' => 'Christian',
                'user_id' => 2,
                'mentor_id' => 2,
                'last_seen' => '25th, January, 2021'
            ],
            [
                'admission_no' => '121599',
                'avatar' => 'avatar.png',
                'year' => 3,
                'intake' => 'April, 2018',
                'prev_school' => 'Chilton High',
                'phone' => '0712345678',
                'dob' => '1st, April, 2000',
                'national_ID' => '1234567',
                'address' => '1234-00100',
                'residence' => 'Kilimani',
                'home_county' => 'Nairobi',
                'religion' => 'Christian',
                'user_id' => 3,
                'mentor_id' => 2,
                'last_seen' => '25th, January, 2021'
            ],
            [
                'admission_no' => '121457',
                'avatar' => 'avatar.png',
                'year' => 3,
                'intake' => 'April, 2018',
                'prev_school' => 'Chilton High',
                'phone' => '0712345678',
                'dob' => '1st, April, 2000',
                'national_ID' => '1234567',
                'address' => '1234-00100',
                'residence' => 'Kilimani',
                'home_county' => 'Nairobi',
                'religion' => 'Christian',
                'user_id' => 4,
                'mentor_id' => 1,
                'last_seen' => '25th, January, 2021'
            ],
            [
                'admission_no' => '121289',
                'avatar' => 'avatar.png',
                'year' => 3,
                'intake' => 'April, 2018',
                'prev_school' => 'Chilton High',
                'phone' => '0712345678',
                'dob' => '1st, April, 2000',
                'national_ID' => '1234567',
                'address' => '1234-00100',
                'residence' => 'Kilimani',
                'home_county' => 'Nairobi',
                'religion' => 'Christian',
                'user_id' => 5,
                'mentor_id' => 2,
                'last_seen' => '25th, January, 2021'
            ],
            [
                'admission_no' => '121521',
                'avatar' => 'avatar.png',
                'year' => 3,
                'intake' => 'July, 2018',
                'prev_school' => 'Chilton High',
                'phone' => '0712345678',
                'dob' => '1st, April, 2000',
                'national_ID' => '1234567',
                'address' => '1234-00100',
                'residence' => 'Kilimani',
                'home_county' => 'Nairobi',
                'religion' => 'Christian',
                'user_id' => 6,
                'mentor_id' => 2,
                'last_seen' => '25th, January, 2021'
            ],
            [
                'admission_no' => '121060',
                'avatar' => 'avatar.png',
                'year' => 3,
                'intake' => 'April, 2018',
                'prev_school' => 'Chilton High',
                'phone' => '0712345678',
                'dob' => '1st, April, 2000',
                'national_ID' => '1234567',
                'address' => '1234-00100',
                'residence' => 'Kilimani',
                'home_county' => 'Nairobi',
                'religion' => 'Christian',
                'user_id' => 7,
                'mentor_id' => 2,
                'last_seen' => '25th, January, 2021'
            ],
            [
                'admission_no' => '121800',
                'avatar' => 'avatar.png',
                'year' => 3,
                'intake' => 'April, 2018',
                'prev_school' => 'Chilton High',
                'phone' => '0712345678',
                'dob' => '1st, April, 2000',
                'national_ID' => '1234567',
                'address' => '1234-00100',
                'residence' => 'Kilimani',
                'home_county' => 'Nairobi',
                'religion' => 'Christian',
                'user_id' => 8,
                'mentor_id' => 1,
                'last_seen' => '25th, January, 2021'
            ],
            [
                'admission_no' => '122184',
                'avatar' => 'avatar.png',
                'year' => 3,
                'intake' => 'April, 2018',
                'prev_school' => 'Chilton High',
                'phone' => '0712345678',
                'dob' => '1st, April, 2000',
                'national_ID' => '1234567',
                'address' => '1234-00100',
                'residence' => 'Kilimani',
                'home_county' => 'Nairobi',
                'religion' => 'Christian',
                'user_id' => 9,
                'mentor_id' => 1,
                'last_seen' => '25th, January, 2021'
            ],
            [
                'admission_no' => '97770',
                'avatar' => 'avatar.png',
                'year' => 3,
                'intake' => 'July, 2018',
                'prev_school' => 'Chilton High',
                'phone' => '0712345678',
                'dob' => '1st, April, 2000',
                'national_ID' => '1234567',
                'address' => '1234-00100',
                'residence' => 'Kilimani',
                'home_county' => 'Nairobi',
                'religion' => 'Christian',
                'user_id' => 10,
                'mentor_id' => 2,
                'last_seen' => '25th, January, 2021'
            ],

            ];

        foreach($students as $student)
              {
                Student::create([
                    'admission_no' => $student['admission_no'],
                    'avatar' => $student['avatar'],
                    'year' => $student['year'],
                    'intake' => $student['intake'],
                    'prev_school' => $student['prev_school'],
                    'phone' => $student['phone'],
                    'dob' => $student['dob'],
                    'national_ID' => $student['national_ID'],
                    'address' => $student['address'],
                    'residence' => $student['residence'],
                    'home_county' => $student['home_county'],
                    'religion' => $student['religion'],
                    'user_id' => $student['user_id'],
                    'mentor_id' => $student['mentor_id'],
                    'last_seen' => $student['last_seen']
   ,
   'last_seen' => '25th, January, 2021'              ]);
               }
    }
}
