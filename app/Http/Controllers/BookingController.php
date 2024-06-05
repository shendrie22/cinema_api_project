<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Bookings retrieved successfully.',
            'data' => Booking::with(['user', 'schedule'])->get()
        ], 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'schedule_id' => 'required|exists:schedules,id',
            'total_amount' => 'required|numeric|between:0,999999.99',
            'seats' => 'required|integer'
        ]);

        $booking = Booking::create($validatedData);

        return response()->json([
            'message' => 'Booking created successfully.',
            'data' => $booking
        ], 201);
    }

    public function show($id)
    {
        $booking = Booking::findOrFail($id);

        return response()->json([
            'message' => 'Booking retrieved successfully.',
            'data' => $booking->load(['user', 'schedule'])
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        $validatedData = $request->validate([
            'user_id' => 'sometimes|required|exists:users,id',
            'schedule_id' => 'sometimes|required|exists:schedules,id',
            'total_amount' => 'sometimes|required|numeric|between:0,999999.99',
            'seats' => 'sometimes|required|integer'
        ]);

        $booking->update($validatedData);

        return response()->json([
            'message' => 'Booking updated successfully.',
            'data' => $booking
        ], 200);
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return response()->json([
            'message' => 'Booking deleted successfully.'
        ], 200);
    }
}
