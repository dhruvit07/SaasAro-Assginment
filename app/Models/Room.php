<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\RoomCategory;

class Room extends Model
{
    use HasFactory;

    public static $rules = [
        'room_category_id' => 'required|integer|exists:room_categories,id',
        'room_number' => 'required|string',
        'name' => 'required|string',
        'description' => 'required|string',
        'is_available' => 'required|boolean',
    ];

    protected $fillable = [
        'room_category_id',
        'room_number',
        'name',
        'description',
        'is_available',
    ];

    protected $casts = [
        'room_category_id' => 'integer',
        'room_number' => 'string',
        'name' => 'string',
        'description' => 'string',
        'is_available' => 'boolean',
    ];

    public function roomCategory()
    {
        return $this->belongsTo(RoomCategory::class);
    }

}
