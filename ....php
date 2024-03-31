<div class="col-md-6">
    <div class="form-group">
        <label>Date</label>
        <input type="date" name="date" class="form-control" placeholder="Date" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="time">Time</label>
        <div class="select-wrap one-third">
            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
            <select name="time" id="time" class="form-control" required>
                <option value="">Choose a time</option>
                <option value="11:00">11:00 AM</option>
                <option value="12:00">12:00 PM</option>
                <option value="13:00">13:00 PM</option>
                <option value="14:00">14:00 PM</option>
                <option value="15:00">15:00 PM</option>
                <option value="16:00">16:00 PM</option>
                <option value="17:00">17:00 PM</option>
                <option value="18:00">18:00 PM</option>
                <option value="19:00">19:00 PM</option>
                <option value="20:00">20:00 PM</option>
                <option value="21:00">21:00 PM</option>
                <option value="22:00">22:00 PM</option>
                <option value="23:00">23:00 PM</option>
            </select>
        </div>
    </div>
</div>


public function store(Request $request)
{
$reservationDate = date('Y-m-d', strtotime($request->input('date')));
$reservationTime = date('H:i:s', strtotime($request->input('time')));

// Check if the date and time are already reserved
$existingReservation = Reservation::where('date', $reservationDate)
->where('time', $reservationTime)
->first();

if ($existingReservation) {
// Date and time are already reserved, show a message to the user
return redirect()->back()->with('error', 'The selected date and time are already reserved.');
}

$reservation = new Reservation();
$reservation->user_id = Auth::id();
$reservation->name = $request->input('name');
$reservation->email = $request->input('email');
$reservation->phone = $request->input('phone');
$reservation->date = date('Y-m-d', strtotime($request->input('date'))); // Convert date to valid format
$reservation->time = date('H:i:s', strtotime($request->input('time'))); // Convert time to valid format
$reservation->person = $request->input('person');
$reservation->save();
return redirect(route('menu.page'))->with('success', 'Your message has been sent successfully!');
}
