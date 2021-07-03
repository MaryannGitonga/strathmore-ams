<?php

namespace Database\Seeders;

use App\Models\LoanItem;
use Illuminate\Database\Seeder;

class LoanItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $loan_items = [
            [
                'name' => 'Advanced Database Systems - Ramez Elmasri',
                'charges' => 20.00,
                'student_id' => 1,
            ],
            [
                'name' => 'Introduction to Automata Theory - John E. HopCroft',
                'charges' => 45.00,
                'student_id' => 1,
            ],
        ];

        foreach($loan_items as $loan_item)
              {
                LoanItem::create([
                   'name' => $loan_item['name'],
                   'charges' => $loan_item['charges'],
                   'student_id' => $loan_item['student_id']
                 ]);
               }
    }
}
