<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            [
                'room_category_id' => 1,
                'room_number' => '101',
                'name' => 'Standard Room 101',
                'description' => 'Standard Room 101',
                'is_available' => true
            ],
            [
                'room_category_id' => 1,
                'room_number' => '102',
                'name' => 'Standard Room 102',
                'description' => 'Standard Room 102',
                'is_available' => true
            ],
            [
                'room_category_id' => 1,
                'room_number' => '103',
                'name' => 'Standard Room 103',
                'description' => 'Standard Room 103',
                'is_available' => true
            ],
            [
                'room_category_id' => 1,
                'room_number' => '104',
                'name' => 'Standard Room 104',
                'description' => 'Standard Room 104',
                'is_available' => true
            ],
            [
                'room_category_id' => 2,
                'room_number' => '201',
                'name' => 'Executive Suite Room 201',
                'description' => 'Executive Suite Room 201',
                'is_available' => true
            ],
            [
                'room_category_id' => 2,
                'room_number' => '202',
                'name' => 'Executive Suite Room 202',
                'description' => 'Executive Suite Room 202',
                'is_available' => true
            ],
            [
                'room_category_id' => 2,
                'room_number' => '203',
                'name' => 'Executive Suite Room 203',
                'description' => 'Executive Suite Room 203',
                'is_available' => true
            ],
            [
                'room_category_id' => 2,
                'room_number' => '204',
                'name' => 'Executive Suite Room 204',
                'description' => 'Executive Suite Room 204',
                'is_available' => true
            ],
            [
                'room_category_id' => 3,
                'room_number' => '301',
                'name' => 'Deluxe Room 301',
                'description' => 'Deluxe Room 301',
                'is_available' => true
            ],
            [
                'room_category_id' => 3,
                'room_number' => '302',
                'name' => 'Deluxe Room 302',
                'description' => 'Deluxe Room 302',
                'is_available' => true
            ],
            [
                'room_category_id' => 3,
                'room_number' => '303',
                'name' => 'Deluxe Room 303',
                'description' => 'Deluxe Room 303',
                'is_available' => true
            ],
            [
                'room_category_id' => 3,
                'room_number' => '304',
                'name' => 'Deluxe Room 304',
                'description' => 'Deluxe Room 304',
                'is_available' => true
            ],
            [
                'room_category_id' => 4,
                'room_number' => '401',
                'name' => 'Mixed Room 401',
                'description' => 'Mixed Room 401',
                'is_available' => true
            ],
            [
                'room_category_id' => 4,
                'room_number' => '402',
                'name' => 'Mixed Room 402',
                'description' => 'Mixed Room 402',
                'is_available' => true
            ],
            [
                'room_category_id' => 4,
                'room_number' => '403',
                'name' => 'Mixed Room 403',
                'description' => 'Mixed Room 403',
                'is_available' => true
            ],
            [
                'room_category_id' => 4,
                'room_number' => '404',
                'name' => 'Mixed Room 404',
                'description' => 'Mixed Room 404',
                'is_available' => true
            ]
        ]);
    }
}
