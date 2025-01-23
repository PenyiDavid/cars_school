<?php
 
namespace Database\Seeders;
 
use App\Models\Car;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
 
class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //3 konkrét autó adatainak feltöltése
        DB::table('cars')->insert([
            [
                'car_model' => 'Toyota Corolla',
                'caution_money' => 50000,
                'km_price' => 20,
                'day_price' => 10000,
                'description' => 'Reliable family car',
            ],
            [
                'car_model' => 'Honda Civic',
                'caution_money' => 60000,
                'km_price' => 25,
                'day_price' => 12000,
                'description' => 'Stylish and efficient',
            ],
            [
                'car_model' => 'Ford Focus',
                'caution_money' => 55000,
                'km_price' => 22,
                'day_price' => 11000,
                'description' => 'Comfortable and powerful',
            ],
        ]);
        //10 random autó adatainak feltöltése
        Car::factory()->count(10)->create();
    }
}