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
    <div>
        <button id="room" onclick="toggleShow()">
            Search Rooms
        </button>
        <div id="alll">
            <div class="rooms">
                <table id="first">
                    <thead>
                        <th>Room Category</th>
                        <th>Available Rooms</th>
                    </thead>
                    <tbody>
                        @isset($roomCategories)
                            @foreach ($roomCategories as $roomCategory)
                                <tr>
                                    <td>{{ $roomCategory->name }}</td>
                                    <td>
                                        <select class="rooms" wire:model="selectedRoomsId.{{ $roomCategory->id }}">
                                            <option value="0">Not Selected</option>
                                            @for ($i = 1; $i <= $roomCategory->available_rooms; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </td>
                                </tr>
                            @endforeach
                        @endisset
                    </tbody>
                </table>
                <table id="first">
                    <thead>
                        <th>Room Category</th>
                        <th>Adults</th>
                        <th>Children(5-12yr)</th>
                        <th>Infant(Upto 4yr)</th>
                        <th>Meal Plan</th>
                        <th>Cost</th>
                        <th>GST</th>
                        <th>Total</th>
                    </thead>
                    <tbody>
                        @isset($selectedRoomCategories)

                            @foreach ($selectedRoomCategories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <select class="rooms" wire:model="adultsCount.{{ $category->id }}">
                                            <option value="null">Not Selected</option>
                                            @for ($i = 1; $i <= $category->max_adult; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </td>
                                    <td>
                                        <select class="rooms" wire:model="childrensCount.{{ $category->id }}">
                                            <option value="0">Not Selected</option>
                                            @for ($i = 1; $i <= $category->max_children; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </td>
                                    <td>
                                        <select class="rooms" wire:model="infantsCount.{{ $category->id }}">
                                            <option value="0">Not Selected</option>
                                            @for ($i = 1; $i <= $category->max_infant; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </td>
                                    <td>
                                        <select class="rooms" name="roomtype" required
                                            wire:model="mealType.{{ $category->id }}">
                                            <option value="0">Not Selected</option>
                                            <option value="Room Only">Room Only</option>
                                            <option value="In Lounge">In Lounge</option>
                                        </select>
                                    </td>
                                    <td>{{ $category->cost }}</td>
                                    <td>{{ $category->tax }}</td>
                                    <td>{{ $category->total }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td>Total Room: {{ $totalRooms }}</td>
                                <td>Adult: {{ $totalAdults }}</td>
                                <td>Child: {{ $totalChildrens }}</td>
                                <td colspan="4">Total Cost</td>
                                <td> {{ $cost ?? 0 }} </td>
                            </tr>
                            <tr>
                                <td colspan="7">Total GST</td>
                                <td>{{ $tax ?? 0 }}</td>
                            </tr>
                            <tr>
                                <td colspan="7">Total Discount in Rs <input type="number" id="total"
                                        wire:model="discount">
                                </td>
                                <td>{{ $discount }}</td>

                            </tr>
                            <tr>
                                <td colspan="7">Payable Amount</td>
                                <td>{{ $total }}</td>
                            </tr>
                        @endisset

                    </tbody>
                </table>
            </div>
            <div class="next">
                <button id="next" type="button"  wire:click="submitForm">Next Step</button>
            </div>

        </div>
    </div>
</div>
