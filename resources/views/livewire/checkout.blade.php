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
    <div class="final">
        <button id="final" onclick="toggleAtShoww()">FINAL STEP</button>
        <div id="atlast">

            <form>
                <div class="box">
                    <p>Booking status:</p>
                </div>
                <div class="box">
                    <input type="radio" id="male" name="gender" value="2" wire:model="bookingStatus">
                    <label for="male">Confirm Booking</label>
                </div>
                <div class="box">
                    <input type="radio" id="female" name="gender" value="1" wire:model='bookingStatus'>
                    <label for="female">Hold Booking</label><br>
                </div>
                <div class="box"></div>
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
        </form>

        <div class="next">
            <button id="next" type="button" wire:click="create">Complete</button>
        </div>

    </div>
</div>
