<?php

namespace App\Services;

use App\Repositories\RoomRepository;

class RoomService
{

    protected $roomRepository;

    public function __construct(RoomRepository $roomRepository)
    {
        $this->roomRepository = $roomRepository;
    }

}