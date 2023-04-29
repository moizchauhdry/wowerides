<?php

namespace Database\Seeders;

use App\Models\WorkOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WorkOrder::create([
            'customer_name' => 'Moiz Chauhdry',
            'bike_brand' => 'Honda',
            'bike_model' => 'YBR 125',
            'wo_date' => '2023-04-29',
            'return_date' => '2023-05-01',
            'total_amount' => 150.25,
        ]);
    }
}
