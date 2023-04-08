<?php

namespace App\Repositories;

use App\Models\Room;
use App\Models\RoomCategory;
use App\Models\Booking;

class RoomRepository
{
    public function getRoomCategoriesWithAvailableRoomCount($checkInDate, $checkOutDate)
    {
        $bookings = Booking::where('check_in', '<=', $checkOutDate)
                            ->where('check_out', '>=', $checkInDate)
                            ->get();

        $bookedRooms = $bookings->map(function ($booking) {
            return $booking->rooms;
        });

        return RoomCategory::withCount([
            'rooms as available_rooms' => function ($query) use ($bookedRooms) {
                $query->whereNotIn('id', $bookedRooms->flatten()->pluck('id'));
            }
        ])->get();
    }
    public function RoomCategoriesWithAvailableRoomCriteria($checkInDate, $checkOutDate)
    {
        $bookings = Booking::where('check_in', '<=', $checkOutDate)
                            ->where('check_out', '>=', $checkInDate)
                            ->get();

        $bookedRooms = $bookings->map(function ($booking) {
            return $booking->rooms;
        });

        return RoomCategory::with([
            'rooms' => function ($query) use ($bookedRooms) {
                $query->whereNotIn('id', $bookedRooms->flatten()->pluck('id'));
            }
        ]);
    }

    public function getRoomCategoriesByIds($ids)
    {
        return RoomCategory::whereIn('id', $ids)->get();
    }
}
