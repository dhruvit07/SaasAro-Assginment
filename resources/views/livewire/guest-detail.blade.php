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
    <div class="details">
        <button id="guest" onclick="toggleShoww()">GUEST DETAILS</button>
        <div id="grid">
            <div class="detail">
                <div class="guest">
                    <div id="one">
                        <h3>Booking Source</h3>
                        <select class="text"  wire:model="bookingSource">
                            <option value="">Please Select</option>
                            <option value="Direct" >Direct</option>
                            <option value="Online">Online</option>
                        </select>
                    </div>
                    <div id="one">
                        <h3>Source Type</h3>
                        <input type="text" name="" class="text" wire:model="bookingReference">
                    </div>
                </div>
                <div>
                    <h3>GuestDetails(Search With Name,Email,Nobile)</h3>
                    <input type="text" class="text" placeholder="Add Guest Information" wire:model="guestDetail">
                </div>
                <div>
                    <h3>Special Notes</h3>
                    <textarea name="" class="text" cols="20" rows="5" wire:model="notes"></textarea>
                </div>
            </div>
            <div class="detaill">
                <table id="finaltable">
                    @if ($isInitialized)
                        <tbody>
                            <tr>
                                <td colspan="3">Check In Date</td>
                                <td>{{ date('d-M', strtotime($checkInDate)) }}</td>
                            </tr>
                            <tr>
                                <td colspan="3">Check Out Date</td>
                                <td>{{ date('d-M', strtotime($checkOutDate)) }}</td>
                            </tr>
                            @foreach ($selectedRoomCategories as $category)
                                <tr>
                                    <td colspan="3">{{ $category['name'] }}</td>
                                    <td>{{ $category['total_room'] }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="3">Net Cost</td>
                                <td>{{ $cost - $discount }}</td>
                            </tr>
                            <tr>
                                <td colspan="3">Total GST</td>
                                <td>{{ $tax }}</td>
                            </tr>

                            <tr>
                                <td colspan="3">Payable Amount</td>
                                <td>{{ $total }}</td>
                            </tr>
                        </tbody>
                    @endif
                </table>
            </div>
            <div class="next">
                <button id="next" type="button" wire:click="submitForm">Next Step</button>
            </div>
        </div>
    </div>
</div>
