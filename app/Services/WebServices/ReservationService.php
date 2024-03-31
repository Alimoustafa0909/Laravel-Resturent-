<?php

namespace App\Services\WebServices;

use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class ReservationService
{
    public function store(ReservationRequest $request)
    {
        $request->validated();
        $reservationDate = date('Y-m-d', strtotime($request->input('date')));
        $reservationTime = date('H:i:s', strtotime($request->input('time')));

        // Check if the date and time are already reserved
        $existingReservation = Reservation::where('date', $reservationDate)
            ->where('time', $reservationTime)
            ->first();

        if ($existingReservation) {
            // Date and time are already reserved, show a message to the user
            return ['error' => 'The selected time are already reserved.'];
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
        return $reservation;
    }
}
