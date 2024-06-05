<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Schedules retrieved successfully.',
            'data' => Schedule::with(['cinema', 'movie'])->get()
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'cinema_id' => 'required|exists:cinemas,id',
            'movie_id' => 'required|exists:movies,id',
            'screen_number' => 'required|integer',
            'show_time' => 'required|date_format:Y-m-d H:i:s'
        ]);

        $schedule = Schedule::create($request->all());

        return response()->json([
            'message' => 'Schedule created successfully.',
            'data' => $schedule
        ], 201);
    }

    public function show($id)
    {
        $schedule = Schedule::findOrFail($id);

        return response()->json([
            'message' => 'Schedule retrieved successfully.',
            'data' => $schedule->load(['cinema', 'movie'])
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $schedule = Schedule::findOrFail($id);

        $request->validate([
            'cinema_id' => 'sometimes|required|exists:cinemas,id',
            'movie_id' => 'sometimes|required|exists:movies,id',
            'screen_number' => 'sometimes|required|integer',
            'show_time' => 'sometimes|required|date_format:Y-m-d H:i:s'
        ]);

        $schedule->update($request->all());

        return response()->json([
            'message' => 'Schedule updated successfully.',
            'data' => $schedule
        ], 200);
    }

    public function destroy($id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();

        return response()->json([
            'message' => 'Schedule deleted successfully.'
        ], 200);
    }
}
