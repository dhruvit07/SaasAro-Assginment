<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StayDates extends Component
{
    public $checkInDate;
    public $checkOutDate;

    protected $rules = [
        'checkInDate' => 'required|date|after_or_equal:today',
        'checkOutDate' => 'required|date|after_or_equal:checkInDate',
    ];

    public function render()
    {
        return view('livewire.stay-dates');
    }

    public function submitForm()
    {
        $this->validate();
        $this->emit('stayDatesSelected', $this->checkInDate, $this->checkOutDate);
    }
}
