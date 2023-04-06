<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('app.css') }}">
</head>

<body>
    <div class="all">
        <div class="checking">
            <button id="dates" onclick="toggleOnShow()">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                    class="bi bi-calendar-event" viewBox="0 0 16 16">
                    <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                    <path
                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                </svg>
                STAY DATES
            </button>
            <form action="" id="form">
                <input type="date" placeholder="Select check in Dates" id="checkin">

                <input type="date" placeholder="Select check out Dates" id="checkin">
                <button id="Available">Search Availability</button>
            </form>
        </div>
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
                            <tr>
                                <td>Standard Room</td>
                                <td><select id="rooms" name="roomtype" required>
                                        <option value="1">1 Room</option>
                                        <option value="2">2 Room</option>
                                        <option value="3">3 Room</option>
                                        <option value="4">4 Room</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Executive Suite Room</td>
                                <td>
                                    <select id="rooms" name="roomtype" required>
                                        <option value="1">1 Room</option>
                                        <option value="single">2 Room</option>
                                        <option value="double">3 Room</option>
                                        <option value="suite">4 Room</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Deluxe Room</td>
                                <td><select id="rooms" name="roomtype" required>
                                        <option value="1">1 Room</option>
                                        <option value="single">2 Room</option>
                                        <option value="double">3 Room</option>
                                        <option value="suite">4 Room</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Mixed Room</td>
                                <td><select id="rooms" name="roomtype" required>
                                        <option value="">1 Room</option>
                                        <option value="single">2 Room</option>
                                        <option value="double">3 Room</option>
                                        <option value="suite">4 Room</option>
                                    </select></td>
                            </tr>
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
                            <tr>
                                <td>Standard Room</td>
                                <td>
                                    <select id="rooms" name="roomtype" required>
                                        <option value="1">1 </option>
                                        <option value="2">2</option>
                                        <option value="double">3</option>
                                        <option value="suite">4</option>
                                        <option value="suite">5</option>
                                        <option value="suite">6</option>
                                        <option value="suite">7</option>
                                    </select>
                                </td>
                                <td><select id="rooms" name="roomtype" required>
                                        <option value="">0</option>
                                        <option value="">1</option>
                                        <option value="single">2</option>
                                        <option value="double">3</option>
                                        <option value="suite">4</option>
                                        <option value="suite">5</option>
                                        <option value="suite">6</option>
                                        <option value="suite">7</option>
                                    </select></td>
                                <td><select id="rooms" name="roomtype" required>
                                        <option value="">0</option>
                                        <option value="">1</option>
                                        <option value="single">2</option>
                                        <option value="double">3</option>
                                        <option value="suite">4</option>
                                        <option value="suite">5</option>
                                        <option value="suite">6</option>
                                        <option value="suite">7</option>
                                    </select></td>
                                <td>
                                    <select id="rooms" name="roomtype" required>
                                        <option value="">Room only</option>
                                        <option value="">In lounge</option>
                                    </select>
                                </td>
                                <td>1000</td>
                                <td>120</td>
                                <td>1120</td>
                            </tr>
                            <tr>
                                <td>Executive Suite Room</td>
                                <td>
                                    <select id="rooms" name="roomtype" required>
                                        <option value="">1 </option>
                                        <option value="single">2</option>
                                        <option value="double">3</option>
                                        <option value="suite">4</option>
                                        <option value="suite">5</option>
                                        <option value="suite">6</option>
                                        <option value="suite">7</option>
                                    </select>
                                </td>
                                <td><select id="rooms" name="roomtype" required>
                                        <option value="">0</option>
                                        <option value="">1</option>
                                        <option value="single">2</option>
                                        <option value="double">3</option>
                                        <option value="suite">4</option>
                                        <option value="suite">5</option>
                                        <option value="suite">6</option>
                                        <option value="suite">7</option>
                                    </select></td>
                                <td><select id="rooms" name="roomtype" required>
                                        <option value="">0</option>
                                        <option value="">1</option>
                                        <option value="single">2</option>
                                        <option value="double">3</option>
                                        <option value="suite">4</option>
                                        <option value="suite">5</option>
                                        <option value="suite">6</option>
                                        <option value="suite">7</option>
                                    </select></td>
                                <td>
                                    <select id="rooms" name="roomtype" required>
                                        <option value="">Room only</option>
                                        <option value="">In lounge</option>
                                    </select>
                                </td>
                                <td>2795</td>
                                <td>335.4</td>
                                <td>3130.4</td>
                            </tr>
                            <tr>
                                <td>Deluxe Room</td>
                                <td>
                                    <select id="rooms" name="roomtype" required>
                                        <option value="">1 </option>
                                        <option value="single">2</option>
                                        <option value="double">3</option>
                                        <option value="suite">4</option>
                                        <option value="suite">5</option>
                                        <option value="suite">6</option>
                                        <option value="suite">7</option>
                                    </select>
                                </td>
                                <td><select id="rooms" name="roomtype" required>
                                        <option value="">0</option>
                                        <option value="">1</option>
                                        <option value="single">2</option>
                                        <option value="double">3</option>
                                        <option value="suite">4</option>
                                        <option value="suite">5</option>
                                        <option value="suite">6</option>
                                        <option value="suite">7</option>
                                    </select></td>
                                <td><select id="rooms" name="roomtype" required>
                                        <option value="">0</option>
                                        <option value="">1</option>
                                        <option value="single">2</option>
                                        <option value="double">3</option>
                                        <option value="suite">4</option>
                                        <option value="suite">5</option>
                                        <option value="suite">6</option>
                                        <option value="suite">7</option>
                                    </select></td>
                                <td>
                                    <select id="rooms" name="roomtype" required>
                                        <option value="">Room only</option>
                                        <option value="">In lounge</option>
                                    </select>
                                </td>
                                <td>5000</td>
                                <td>600</td>
                                <td>5600</td>
                            </tr>
                            <tr>
                                <td>Mixed Room</td>
                                <td>
                                    <select id="rooms" name="roomtype" required>
                                        <option value="">1 </option>
                                        <option value="single">2</option>
                                        <option value="double">3</option>
                                        <option value="suite">4</option>
                                        <option value="suite">5</option>
                                        <option value="suite">6</option>
                                        <option value="suite">7</option>
                                    </select>
                                </td>
                                <td><select id="rooms" name="roomtype" required>
                                        <option value="">Not Allowed</option>
                                    </select></td>
                                <td><select id="rooms" name="roomtype" required>
                                        <option value="">0</option>
                                        <option value="">1</option>
                                        <option value="single">2</option>
                                        <option value="double">3</option>
                                        <option value="suite">4</option>
                                        <option value="suite">5</option>
                                        <option value="suite">6</option>
                                        <option value="suite">7</option>
                                    </select></td>
                                <td>
                                    <select id="rooms" name="roomtype" required>
                                        <option value="">Room only</option>
                                        <option value="">In lounge</option>
                                    </select>
                                </td>
                                <td>1000</td>
                                <td>120</td>
                                <td>1120</td>
                            </tr>
                            <tr>
                                <td>Total Room: 4</td>
                                <td>Adult: 4</td>
                                <td>Child:0</td>
                                <td colspan="4">Net Cost</td>
                                <td>9795</td>
                            </tr>
                            <tr>
                                <td colspan="7">Total GST</td>
                                <td>1175.4</td>
                            </tr>
                            <tr>
                                <td colspan="7">Total Discount <input type="number" id="total">
                                    <input type="percentage" id="total">
                                    <button id="add">Add</button>
                                </td>
                                <td>0</td>

                            </tr>
                            <tr>
                                <td colspan="7">Payable Amount</td>
                                <td>10970</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="next">
                    <button id="next" type="button" onclick="addFill()">Next Step</button>
                </div>

            </div>
        </div>

        <div class="details">
            <button id="guest" onclick="toggleShoww()">GUEST DETAILS</button>
            <div id="grid">
                <div class="detail">
                    <div class="guest">
                        <div id="one">
                            <h3>Booking Source</h3>
                            <select id="text" name="roomtype" required>
                                <option value="">Direct</option>
                                <option value="">Online</option>
                            </select>
                        </div>
                        <div id="one">
                            <h3>Source Type</h3>
                            <input type="text" name="" id="text">
                        </div>
                    </div>
                    <div>
                        <h3>GuestDetails(Search With Name,Email,Nobile)</h3>
                        <input type="text" id="text" placeholder="Add Guest Information">
                    </div>
                    <div>
                        <h3>Special Notes</h3>
                        <textarea name="" id="text" cols="20" rows="5"></textarea>
                    </div>
                </div>
                <div class="detaill">
                    <table id="finaltable">
                        <tbody>
                            <tr>
                                <td colspan="3">Check In Date</td>
                                <td>24-March</td>
                            </tr>
                            <tr>
                                <td colspan="3">Check Out Date</td>
                                <td>25-March</td>
                            </tr>
                            <tr>
                                <td colspan="3">Number Of Rooms</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td colspan="3">Standard Room..</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td colspan="3">Executive Suite Room..</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td colspan="3">Delux Room</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td colspan="3">Mixed Room..</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td colspan="3">Net Cost</td>
                                <td>9795</td>
                            </tr>
                            <tr>
                                <td colspan="3">Total GST</td>
                                <td>1175.4</td>
                            </tr>
                            <tr>
                                <td colspan="3">Payable Amount</td>
                                <td>10970</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="final">
            <button id="final" onclick="toggleAtShoww()">FINAL STEP</button>
            <div id="atlast">

                <form>
                    <div class="box">
                    <p>Booking status:</p></div>
                    <div class="box">
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Confirm Booking</label>
                    </div>
                    <div class="box">
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Hold Booking</label><br>
                    </div>
                    <div class="box"></div>
                    <table id="finaltable">
                        <tbody>
                            <tr>
                                <td colspan="3">Check In Date</td>
                                <td>24-March</td>
                            </tr>
                            <tr>
                                <td colspan="3">Check Out Date</td>
                                <td>25-March</td>
                            </tr>
                            <tr>
                                <td colspan="3">Number Of Rooms</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td colspan="3">Standard Room..</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td colspan="3">Executive Suite Room..</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td colspan="3">Delux Room</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td colspan="3">Mixed Room..</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td colspan="3">Net Cost</td>
                                <td>9795</td>
                            </tr>
                            <tr>
                                <td colspan="3">Total GST</td>
                                <td>1175.4</td>
                            </tr>
                            <tr>
                                <td colspan="3">Payable Amount</td>
                                <td>10970</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </form>
                
                    
                
            </div>
        </div>
        <script src="script.js"></script>
</body>

</html>