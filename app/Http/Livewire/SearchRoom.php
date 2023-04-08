<?php

namespace App\Http\Livewire;

use App\Models\Room;
use Livewire\Component;
use App\Repositories\RoomRepository;
use Illuminate\Support\Str;

class SearchRoom extends Component
{
    public $checkInDate;
    public $checkOutDate;
    public $roomCategories;
    public $selectedRoomsId;
    public $adultsCount;
    public $childrensCount;
    public $infantsCount;
    public $mealType;
    public $cost = 0;
    public $tax = 0;
    public $total = 0;
    public $discount = 0;
    public $totalAdults = 0;
    public $totalChildrens = 0;
    public $totalInfants = 0;
    public $totalRooms = 0;
    public $selectedRoomCategories;

    // rules
    protected $rules = [
        'checkInDate' => 'required|date|after_or_equal:today',
        'checkOutDate' => 'required|date|after_or_equal:checkInDate',
        'selectedRoomsId.*' => 'required|integer|min:0',
        'totalAdults' => 'required|integer|min:1',
        'totalChildrens' => 'required|integer|min:0',
        'totalInfants' => 'required|integer|min:0',
        'mealType' => 'required',
        'mealType.*' => 'required|in:Room Only,In Lounge',
        'cost' => 'required|integer|min:0',
        'discount' => 'required|integer|min:0',
        'tax' => 'required|integer|min:0',
        'total' => 'required|integer|min:0',
    ];

    protected $listeners = ['stayDatesSelected' => 'setStayDates'];

    public function setStayDates($checkInDate, $checkOutDate)
    {
        $this->checkInDate = $checkInDate;
        $this->checkOutDate = $checkOutDate;
    }


    public function updated($name, $value)
    {
        // reset the values
        $this->cost = 0;
        $this->tax = 0;
        $this->total = 0;
        $this->totalRooms = 0;
   
        foreach ($this->selectedRoomsId as $key => $value) {
            if ($value == 0) {
                unset($this->selectedRoomsId[$key]);
            }
        }
    
        $this->selectedRoomCategories = app(RoomRepository::class)->getRoomCategoriesByIds(array_keys($this->selectedRoomsId));

        // calculate the total cost, tax, total, discount, total adults, total childrens, total infants for each room category
        foreach ($this->selectedRoomCategories as $roomCategory) {
            $roomCategory->total_room = $this->selectedRoomsId[$roomCategory->id]; 
            $roomCategory->cost = $roomCategory->price * $this->selectedRoomsId[$roomCategory->id];
            $roomCategory->tax = $roomCategory->tax * $this->selectedRoomsId[$roomCategory->id];
            $roomCategory->total = $roomCategory->cost + $roomCategory->tax;
            $this->totalRooms += $roomCategory->total_room;
            $this->cost += $roomCategory->cost;
            $this->tax += $roomCategory->tax;
            $this->total += $roomCategory->total;
        }
        if($this->discount > 0 && $this->total > 0 && $this->discount < $this->total){
            $this->discount = doubleval($this->discount);
            $this->total -= $this->discount;
        }
    }

    public function updatedAdultsCount($value)
    {
        $this->totalAdults = array_sum($this->adultsCount);
    }

    public function updatedChildrensCount($value)
    {
        $this->totalChildrens = array_sum($this->childrensCount);
    }

    public function updatedInfantsCount($value)
    {
        $this->totalInfants = array_sum($this->infantsCount);
    }

    public function submitForm(){
        $this->updated('selectedRoomsId', $this->selectedRoomsId);
        $this->validate();
        $this->emit('searchRoomFormSubmitted', $this->checkInDate,
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
                                              $this->selectedRoomCategories);    
    }


    public function render()
    {
        if ($this->checkInDate && $this->checkOutDate) {
            $this->roomCategories = app(RoomRepository::class)->getRoomCategoriesWithAvailableRoomCount($this->checkInDate, $this->checkOutDate);
        }
        return view('livewire.search-room');
    }
}
