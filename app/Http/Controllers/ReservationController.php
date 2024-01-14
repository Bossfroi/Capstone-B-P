<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('dashboard', compact('reservations'));
    }

    public function store(Request $request)
    {
        // Validation rules
        $validatedData = $request->validate([
            'name'          => 'required|string|max:255',
            'email'         => 'required|email|max:255',
            'phone'         => 'nullable|string|max:15',
            'people'        => 'nullable|integer',
            'date'          => 'required|date',
            'time'          => 'required|string',
            'message'       => 'nullable|string',
            'condo_unit'    => 'nullable|integer',
            'avail'         => 'nullable|integer',
        ]);
        try {
            // Create a new reservation
            Reservation::create($validatedData);
            return redirect()->route('submit-reservation')->with('success', 'Reservation submitted successfully!');
        } catch (QueryException $e) {
            // Log the exception message for debugging purposes
            \Log::error('Error storing reservation: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Reservation submission failed. Please try again.');
        }
    }

    public function show(Reservation $reservation)
    {
        return view('show-reservation', compact('reservation'));
    }

    public function edit(Reservation $reservation)
    {
        return view('edit-reservation', compact('reservation'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $validatedData = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|max:255',
            // Add other validation rules for your fields
        ]);

        try {
            $reservation->update($validatedData);
            return redirect()->route('dashboard')->with('success', 'Reservation updated successfully!');
        } catch (QueryException $e) {
            \Log::error('Error updating reservation: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Reservation update failed. Please try again.');
        }
    }

    public function accept(Request $request, Reservation $reservation)
    {
        $validatedData = $request->validate([
            'condo_unit' => 'nullable|string',
            'avail'         => 'nullable|integer',
        ]);

        try {
            $reservation->update($validatedData);
            return redirect()->route('dashboard')->with('success', 'Reservation updated successfully!');
        } catch (QueryException $e) {
            \Log::error('Error updating reservation: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Reservation update failed. Please try again.');
        }
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route('dashboard')->with('success', 'Reservation deleted successfully!');
    }
}
