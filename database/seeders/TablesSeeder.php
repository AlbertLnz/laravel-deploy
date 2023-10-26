<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\Models\Table;

class TablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants_count = intval(Restaurant::count());
        for($i = 1 ; $i < $restaurants_count+1 ; $i++){
            $restaurant = Restaurant::select('tables_number')->where('id', $i)->first();
            $tablesNumber = $restaurant->tables_number;

            for ($j = 0 ; $j < $tablesNumber ; $j++){
                Table::create([
                    'capacity' => rand(1,20),
                    'restaurant_id' => $i
                ]);
            }
        }
    }
}
