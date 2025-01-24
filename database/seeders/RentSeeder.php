<?php

namespace Database\Seeders;

use App\Models\Rent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rents')->insert([
            [
                'car_id' =>  4,
                'email' => 'adsf@asfg.hu',
                'rent_start' => '2024-03-02',
                'rent_end' => '2024-03-5',
                'km' => 50,
                'all_price' => 12000,
            ],
            [
                'car_id' =>  7,
                'email' => 'adsf@asfgasdf.hu',
                'rent_start' => '2023-12-30',
                'rent_end' => '2024-01-01',
                'km' => 100,
                'all_price' => 14500,
            ],
            
        ]);
        

        Rent::factory()->count(1000)->create();
    }
}
