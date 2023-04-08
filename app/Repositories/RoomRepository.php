<?php

namespace App\Repositories;

use App\Models\Room;
use App\Models\RoomCategory;
use App\Models\Booking;

class RoomRepository
{
    public function getAvailableRooms($checkInDate, $checkOutDate)
    {
        $bookings = Booking::where('check_in', '<=', $checkInDate)
            ->where('check_out', '>=', $checkOutDate)
            ->get();

        $bookedRooms = $bookings->map(function ($booking) {
            return $booking->room;
        });

        $availableRooms = Room::whereNotIn('id', $bookedRooms->pluck('id'))
                                ->orderBy('room_category_id')
                                ->get();

        return $availableRooms;
    }

    public function getRoomCategories()
    {
        return RoomCategory::all();
    }

}