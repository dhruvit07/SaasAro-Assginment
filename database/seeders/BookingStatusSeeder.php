<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookingStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('booking_statuses')->insert([
            [
                'name' => 'Pending',
            ],
            [
                'name' => 'Confirmed',
                'description' => 'Confirmed',
            ],
            [
                'name' => 'Cancelled',
                'description' => 'Cancelled',
            ],
            [
                'name' => 'Checked In',
                'description' => 'Checked In',
            ],
            [
                'name' => 'Checked Out',
                'description' => 'Checked Out',
            ],
        ]);
    }
}
