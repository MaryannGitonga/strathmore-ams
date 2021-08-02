<?php

namespace Database\Seeders;

use App\Models\Fee;
use Illuminate\Database\Seeder;

class FeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fees = [
            [
                'date' => '2019-4-21',
                'document_type' => 1,
                'document_number' => 229892,
                'amount' => 377684.00,
                'student_id' => 1,
            ],
            [
                'date' => '2019-5-2',
                'document_type' => 2,
                'document_number' => 209892,
                'amount' => 377684.00,
                'student_id' => 1,
            ],
            [
                'date' => '2020-4-29',
                'document_type' => 1,
                'document_number' => 525198,
                'amount' => 436260.00,
                'student_id' => 1,
            ],
            [
                'date' => '2020-5-10',
                'document_type' => 2,
                'document_number' => 505198,
                'amount' => 436300.00,
                'student_id' => 1,
            ],
            [
                'date' => '2021-6-15',
                'document_type' => 1,
                'document_number' => 264576,
                'amount' => 188844.00,
                'student_id' => 1,
            ],
            [
                'date' => '2021-6-25',
                'document_type' => 2,
                'document_number' => 204576,
                'amount' => 200000.00,
                'student_id' => 1,
            ],
            [
                'date' => '2019-4-21',
                'document_type' => 1,
                'document_number' => 239892,
                'amount' => 377684.00,
                'student_id' => 2,
            ],
            [
                'date' => '2019-4-28',
                'document_type' => 2,
                'document_number' => 299892,
                'amount' => 377684.00,
                'student_id' => 2,
            ],
            [
                'date' => '2020-4-29',
                'document_type' => 1,
                'document_number' => 535198,
                'amount' => 436260.00,
                'student_id' => 2,
            ],
            [
                'date' => '2020-5-3',
                'document_type' => 2,
                'document_number' => 595198,
                'amount' => 500000.00,
                'student_id' => 2,
            ],
            [
                'date' => '2021-6-15',
                'document_type' => 1,
                'document_number' => 274576,
                'amount' => 188844.00,
                'student_id' => 2,
            ],
            [
                'date' => '2021-6-30',
                'document_type' => 2,
                'document_number' => 294576,
                'amount' => 188844.00,
                'student_id' => 2,
            ],
        ];

        foreach($fees as $fee)
              {
                Fee::create([
                   'date' => $fee['date'],
                   'document_type' => $fee['document_type'],
                   'document_number' => $fee['document_number'],
                   'amount' => $fee['amount'],
                   'student_id' => $fee['student_id']
                 ]);
               }
    }
}
