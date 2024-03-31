<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationRequest;
use App\Models\Contact;
use App\Models\Reservation;
use App\Models\Slider;
use App\Services\WebServices\ReservationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{

    private $reservationService;

    public function __construct(ReservationService $reservationService)
    {
        $this->reservationService = $reservationService;
    }

    public function index()
    {
        $slider = Slider::latest()->where('type', 'reservation')->first();
        return view('web.reservation', compact('slider'));
    }


    public function store(ReservationRequest $request)
    {
        $reservation = $this->reservationService->store($request);

        if (isset($reservation['error'])) {
            return redirect(route('reservation.index'))->with('error', $reservation['error']);
        }

        return redirect(route('reservation.index'))->with('message', 'Your Reservation has been sent successfully!');
    }
}
