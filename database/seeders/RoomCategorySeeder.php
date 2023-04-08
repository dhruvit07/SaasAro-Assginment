<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_categories')->insert([
            [
            'name' => 'Standard',
            'description' => 'Standard Room',
            'price' => 100,
            'tax' => 10,
            'max_adult' => 2,
            'max_children' => 1,
            'max_infant' => 1
            ],
            [
            'name' => 'Executive Suite',
            'description' => 'Executive Suite Room',
            'price' => 200,
            'tax' => 20,
            'max_adult' => 3,
            'max_children' => 1,
            'max_infant' => 1
            ],
            [
            'name' => 'Deluxe',
            'description' => 'Deluxe Room',
            'price' => 300,
            'tax' => 30,
            'max_adult' => 4,
            'max_children' => 2,
            'max_infant' => 2
            ],
            [
            'name' => 'Mixed',
            'description' => 'Mixed Room',
            'price' => 400,
            'tax' => 40,
            'max_adult' => 4,
            'max_children' => 0,
            'max_infant' => 1
            ]
        ]);
    }
}
