<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


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
    $data = $request->validated();

    if ($request->hasFile('image')) {
        $name = $request->image->getClientOriginalName(); //o il nome che volete dare al file
    

        $path = Storage::putFileAs('movie_images', $request->image, $name);
        $data['image'] = $path;
    }

    Movie::create($data);


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
        $data = $request->validated();

        

        if ($request->hasFile('image')) {
            if ($movie->image) {
                Storage::delete($movie->image);
            }
            $name = $request->image->getClientOriginalName();
            $path = Storage::putFileAs('movie_images', $request->image, $name);
            $data['image'] = $path;
        }

        // Aggiorna il record nel database
        $movie->update($data);

        return redirect()->route('admin.movies.index')->with('success', 'Movie updated successfully.');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('admin.movies.index')->with('success', 'Movie deleted successfully.');
    }
}