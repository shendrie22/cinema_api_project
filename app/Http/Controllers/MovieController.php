<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Movies retrieved successfully.',
            'data' => Movie::all()
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'duration' => 'required|integer',
            'rating' => 'required|string|max:10',
            'release_date' => 'required|date',
            'description' => 'nullable|string'
        ]);

        $movie = Movie::create($request->all());

        return response()->json([
            'message' => 'Movie created successfully.',
            'data' => $movie
        ], 201);
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);

        return response()->json([
            'message' => 'Movie retrieved successfully.',
            'data' => $movie
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);

        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'genre' => 'sometimes|required|string|max:255',
            'duration' => 'sometimes|required|integer',
            'rating' => 'sometimes|required|string|max:10',
            'release_date' => 'sometimes|required|date',
            'description' => 'nullable|string'
        ]);

        $movie->update($request->all());

        return response()->json([
            'message' => 'Movie updated successfully.',
            'data' => $movie
        ], 200);
    }

    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();

        return response()->json([
            'message' => 'Movie deleted successfully.'
        ], 200);
    }
}
