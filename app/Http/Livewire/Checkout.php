<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Repositories\BookingRepository;

class Checkout extends Component
{
    public $isInitialized = false;
    public $guestDetail;
    public $notes;
    public $bookingSource;
    public $bookingStatus;
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

    protected $listeners = ['guestDetailFormSubmitted' => 'setGuestDetailFormValues'];

    public function render()
    {
        return view('livewire.checkout');
    }

    public function create(){
        $this->validate([
            'bookingStatus' => 'required',
        ]);

        $booking = app(BookingRepository::class)->create([
            'guest_detail' => $this->guestDetail,
            'booking_source' => $this->bookingSource,
            'booking_reference' => $this->bookingReference,
            'booking_status_id' => $this->bookingStatus,
            'total_adults' => $this->totalAdults,
            'total_childrens' => $this->totalChildrens,
            'total_infants' => $this->totalInfants,
            'meal_type' => $this->mealType,
            'cost' => $this->cost,
            'discount' => $this->discount,
            'tax' => $this->tax,
            'total' => $this->total,
            'total_rooms' => $this->totalRooms,
            'check_in_date' => $this->checkInDate,
            'check_out_date' => $this->checkOutDate,
            'selected_room_categories' => $this->selectedRoomCategories,
            'selected_rooms_id' => $this->selectedRoomsId,
            'notes' => $this->notes,
        ]);
        $this->reset();
    }

    public function setGuestDetailFormValues($checkInDate, $checkOutDate, $selectedRoomsId, $mealType, $cost, $tax, $total, $discount, $totalAdults, $totalChildrens, $totalInfants, $totalRooms, $selectedRoomCategories, $bookingSource, $bookingReference, $guestDetail, $notes)
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
        $this->bookingSource = $bookingSource;
        $this->bookingReference = $bookingReference;
        $this->guestDetail = $guestDetail;
        $this->notes = $notes;
    }
}
