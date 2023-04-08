<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GuestDetail extends Component
{

    public $isInitialized = false;
    public $guestDetail;
    public $notes;
    public $bookingSource;
    public $bookingReference;
    public $checkInDate;
    public $checkOutDate; 
    public $selectedRoomsId; 
    public $mealType;
    public $cost;
    public $tax;
    public $total; 
    public $discount; 
    public $totalAdults;
    public $totalChildrens;
    public $totalInfants;
    public $totalRooms;
    public $selectedRoomCategories;


    // rules
    protected $rules = [
        'guestDetail' => 'required',
        'notes' => 'required',
        'bookingSource' => 'required',
        'bookingReference' => 'required',
    ];

    protected $listeners = ['searchRoomFormSubmitted' => 'setSearchRoomFormValues'];


    public function setSearchRoomFormValues($checkInDate, $checkOutDate, $selectedRoomsId, $mealType, $cost, $tax, $total, $discount, $totalAdults, $totalChildrens, $totalInfants, $totalRooms, $selectedRoomCategories)
    {
        $this->isInitialized = true;
        $this->checkInDate = $checkInDate;
        $this->checkOutDate = $checkOutDate;
        $this->selectedRoomsId = $selectedRoomsId;
        $this->mealType = $mealType;
        $this->cost = $cost;
        $this->tax = $tax;
        $this->total = $total;
        $this->discount = $discount;
        $this->totalAdults = $totalAdults;
        $this->totalChildrens = $totalChildrens;
        $this->totalInfants = $totalInfants;
        $this->totalRooms = $totalRooms;
        $this->selectedRoomCategories = $selectedRoomCategories;
    }


    public function submitForm(){
        $this->validate();
        $this->emit('guestDetailFormSubmitted', $this->checkInDate,
                                              $this->checkOutDate, 
                                              $this->selectedRoomsId, 
                                              $this->mealType, 
                                              $this->cost, 
                                              $this->tax, 
                                              $this->total, 
                                              $this->discount, 
                                              $this->totalAdults,
                                              $this->totalChildrens,
                                              $this->totalInfants,
                                              $this->totalRooms,
                                              $this->selectedRoomCategories,
                                                $this->bookingSource,
                                                $this->bookingReference,
                                                $this->guestDetail,
                                                $this->notes
                                            );    
    }


    public function render()
    {
        return view('livewire.guest-detail');
    }
}
