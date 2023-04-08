<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public static $rules = [
        'guest_name' => 'required|string',
        'booking_source' => 'required|string',
        'booking_reference' => 'required|string',
        'booking_status_id' => 'required|integer',
        'adults' => 'required|integer',
        'childrens' => 'required|integer',
        'infants' => 'required|integer',
        'meal_plan' => 'required|string',
        'net_price' => 'required|double',
        'discount' => 'required|double',
        'tax' => 'required|double',
        'gross_price' => 'required|double',
        'check_in' => 'required|date',
        'check_out' => 'required|date',
    ];

    protected $fillable = [
        'guest_name',
        'booking_source',
        'booking_reference',
        'booking_status_id',
        'adults',
        'childrens',
        'infants',
        'meal_plan',
        'net_price',
        'discount',
        'tax',
        'gross_price',
        'check_in',
        'check_out',
    ];

    protected $casts = [
        'guest_name' => 'string',
        'booking_source' => 'string',
        'booking_reference' => 'string',
        'booking_status_id' => 'integer',
        'adults' => 'integer',
        'childrens' => 'integer',
        'infants' => 'integer',
        'meal_plan' => 'string',
        'net_price' => 'double',
        'discount' => 'double',
        'tax' => 'double',
        'gross_price' => 'double',
        'check_in' => 'date',
        'check_out' => 'date',
    ];

    public function room()
    {
        return $this->belongsToMany(Room::class,'booking_room','booking_id','room_id');
    }

    public function bookingStatus()
    {
        return $this->belongsTo(BookingStatus::class);
    }

}
