<div>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $error }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endforeach
    @endif
    <div class="checking">
        <button id="dates" onclick="toggleOnShow()">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                class="bi bi-calendar-event" viewBox="0 0 16 16">
                <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                <path
                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
            </svg>
            STAY DATES | {{ $checkInDate ?? '' }} | {{ $checkOutDate ?? '' }}
        </button>
        <form wire:submit.prevent="submitForm" id="form" name="search-availability">
            <input type="date" placeholder="Select check in Dates" id="checkin" wire:model="checkInDate">

            <input type="date" placeholder="Select check out Dates" id="checkin" wire:model="checkOutDate">
            <button id="Available" type="submit">Search Availability</button>
        </form>
    </div>
</div>
