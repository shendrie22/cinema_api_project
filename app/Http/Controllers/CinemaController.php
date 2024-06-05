<?php

namespace App\Http\Controllers;

use App\Models\Cinema;
use Illuminate\Http\Request;

class CinemaController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Cinemas retrieved successfully.',
            'data' => Cinema::all()
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'total_screens' => 'required|integer'
        ]);

        $cinema = Cinema::create($request->all());

        return response()->json([
            'message' => 'Cinema created successfully.',
            'data' => $cinema
        ], 201);
    }

    public function show($id)
    {
        $cinema = Cinema::findOrFail($id);

        return response()->json([
            'message' => 'Cinema retrieved successfully.',
            'data' => $cinema
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $cinema = Cinema::findOrFail($id);

        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'location' => 'sometimes|required|string|max:255',
            'total_screens' => 'sometimes|required|integer'
        ]);

        $cinema->update($request->all());

        return response()->json([
            'message' => 'Cinema updated successfully.',
            'data' => $cinema
        ], 200);
    }

    public function destroy($id)
    {
        $cinema = Cinema::findOrFail($id);
        $cinema->delete();

        return response()->json([
            'message' => 'Cinema deleted successfully.'
        ], 200);
    }

}
