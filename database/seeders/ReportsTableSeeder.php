<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Report;
use Carbon\Carbon;

class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reports = [
            ['sales' => 31, 'revenue' => 11, 'customers' => 15, 'report_date' => now()],
            ['sales' => 40, 'revenue' => 32, 'customers' => 11, 'report_date' => now()->addHours(1)],
            ['sales' => 28, 'revenue' => 45, 'customers' => 32, 'report_date' => now()->addHours(2)],
            ['sales' => 95, 'revenue' => 54, 'customers' => 22, 'report_date' => now()->addHours(3)],
            ['sales' => 88, 'revenue' => 75, 'customers' => 55, 'report_date' => now()->addHours(4)],

            // Add more data here as needed
        ];

        foreach ($reports as $report) {
            Report::create($report);
        }
    }
}
