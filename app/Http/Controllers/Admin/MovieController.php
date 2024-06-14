<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('admin.movies.index', compact('movies'));
    }

    public function create()
    {
        return view('admin.movies.create');
    }

    public function store(StoreMovieRequest $request)
    {
        Movie::create($request->validated());
        return redirect()->route('admin.movies.index')->with('success', 'Movie created successfully.');
    }

    public function show(Movie $movie)
    {
        return view('admin.movies.show', compact('movie'));
    }

    public function edit(Movie $movie)
    {
        return view('admin.movies.edit', compact('movie'));
    }

    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        $movie->update($request->validated());
        return redirect()->route('admin.movies.index')->with('success', 'Movie updated successfully.');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('admin.movies.index')->with('success', 'Movie deleted successfully.');
    }
}