<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomCategory extends Model
{
    use HasFactory;

    public static $rules = [
        'name' => 'required|string',
    ];

    protected $fillable = [
        'name',
    ];

    protected $casts = [
        'name' => 'string',
    ];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
