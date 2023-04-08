<?php

namespace App\Repositories;

use App\Models\Booking;
use App\Repositories\RoomRepository;

class BookingRepository
{
    public function create(array $data)
    {

        $booking = Booking::create([
            'guest_name' => $data['guest_detail'],
            'booking_source' => $data['booking_source'],
            'booking_reference' => $data['booking_reference'],
            'booking_status_id' => $data['booking_status_id'],
            'adults' => $data['total_adults'],
            'childrens' => $data['total_childrens'],
            'infants' => $data['total_infants'],
            'meal_plan' => array_values($data['meal_type'])[0],
            'net_price' => $data['cost'] - $data['discount'],
            'tax' => $data['tax'],
            'discount' => $data['discount'],
            'gross_price' => $data['total'],
            'total_rooms' => $data['total_rooms'],
            'check_in' => $data['check_in_date'],
            'check_out' => $data['check_out_date'],
            // 'notes' => $data['notes'],
        ]);

        $availableRoomsByCategory = app(RoomRepository::class)->RoomCategoriesWithAvailableRoomCriteria($data['check_in_date'], $data['check_out_date']);

        foreach ($data['selected_room_categories'] as $roomCategory) {
            $roomCategory = $availableRoomsByCategory->where('id', $roomCategory['id'])->first();
            $room = $roomCategory->rooms->take($roomCategory['total_room']);
            $booking->rooms()->attach($room->pluck('id')->toArray());
        }

        return $booking;
    }
}
