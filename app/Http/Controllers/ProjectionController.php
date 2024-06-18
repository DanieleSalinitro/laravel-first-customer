<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projection; // Import corretto
use App\Models\Hall;
use App\Models\Movie;

class ProjectionController extends Controller
{
    public function index()
    {
        $projections = Projection::all();
        return view('admin.projections.index', compact('projections'));
    }

    public function create()
{
    $halls = Hall::all();
    $movies = Movie::all();
    return view('admin.projections.create', compact('halls', 'movies'));
}

    public function store(Request $request)
    {
        $request->validate([
            'hall_id' => 'required|integer|exists:halls,id',
            'movie_id' => 'required|integer|exists:movies,id',
            'start_time' => 'required|date_format:Y-m-d H:i:s',
        ]);
       
        if(checkSlot()){
            return redirect()->route('admin.projections.create')
            ->withErrors(['error' => 'Si è verificato un errore durante la modifica della proiezione.']);
        }
        else{
            HallMovie::create($request->all());
            return redirect()->route('admin.projections.index')
                ->with('success', 'Projection created successfully.');
        }
    }

    public function show($id)
    {
        $projection = Projection::findOrFail($id);
        return view('admin.projections.show', compact('projection'));
    }

    public function edit($id)
    {
        $projection = Projection::findOrFail($id);
        return view('admin.projections.edit', compact('projection'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'hall_id' => 'required|integer|exists:halls,id',
            'movie_id' => 'required|integer|exists:movies,id',
            'start_time' => 'required|date_format:Y-m-d H:i:s',
        ]);

        $projection = HallMovie::findOrFail($id);
        if(checkSlot()){
            return redirect()->route('admin.projections.edit')
            ->withErrors(['error' => 'Si è verificato un errore durante la modifica della proiezione.']);
        }
        else{
            $projection->update($request->all());
            return redirect()->route('admin.projections.index')
                ->with('success', 'Projection updated successfully.');
        }
    }

    public function destroy($id)
    {
        $projection = Projection::findOrFail($id);
        $projection->delete();

        return redirect()->route('admin.projections.index')
            ->with('success', 'Projection deleted successfully.');
    }

    public static function checkSlot(){
        $existingProjections =  $existingMovie = HallMovie::where('start_time', $request->time)
        ->where('date', $request->date)
        ->where('hall_id', $request->hall_id)
        ->first();
    }
}
