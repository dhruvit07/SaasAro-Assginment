<?php

namespace App\Repositories;

use App\Models\Booking;

class BookingRepository
{
    public function getBookings()
    {
        return Booking::all();
    }
}
