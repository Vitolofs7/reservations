<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }

    public function create()
    {
        return view('reservations.create');
    }

    public function store(Request $request)
    {
        $reservation = new Reservation;
        $reservation->client_name = $request->input('client_name');
        $reservation->reservation_date = $request->input('reservation_date');
        $reservation->number_people = $request->input('number_people');
        $reservation->state = $request->input('state');
        $reservation->save();

        return redirect()->route('reservations.index');
    }

    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('reservations.edit', compact('reservation'));
    }

    public function update(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->client_name = $request->input('client_name');
        $reservation->reservation_date = $request->input('reservation_date');
        $reservation->number_people = $request->input('number_people');
        $reservation->state = $request->input('state');
        $reservation->save();

        return redirect()->route('reservations.index');
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->route('reservations.index');
    }
}
