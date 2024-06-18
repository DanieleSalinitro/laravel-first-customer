<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projection;
use App\Models\Hall;
use App\Models\Movie;
use App\Models\HallMovie;

class ProjectionController extends Controller
{
    public function checkSlot(Request $request)
    {
        return HallMovie::where('start_time', $request->start_time)
                        ->where('date', $request->date)
                        ->where('hall_id', $request->hall_id)
                        ->first();
    }

    public function index()
    {
        $projections = Projection::all();
        return view('admin.projections.index', compact('projections'));
    }

    public function create()
    {
        $halls = Hall::all();
        $movies = Movie::all();
        return view('admin.projections.create', compact('halls', 'movies','slot'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'hall_id' => 'required|integer|exists:halls,id',
            'movie_id' => 'required|integer|exists:movies,id',
            'start_time' => 'required|date_format:Y-m-d H:i:s',
        ]);

        if ($this->checkSlot($request)) {
            return redirect()->route('admin.projections.create')
                ->withErrors(['error' => 'Conflitto di orario con un altra proiezione.']);
        } else {
            HallMovie::create($request->all());
            return redirect()->route('admin.projections.index')
                ->with('success', 'Proiezione creata con successo.');
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

        if ($this->checkSlot($request)) {
            return redirect()->route('admin.projections.edit', $id)
                ->withErrors(['error' => 'Conflitto di orario con un altra proiezione.']);
        } else {
            $projection->update($request->all());
            return redirect()->route('admin.projections.index')
                ->with('success', 'Proiezione aggiornata con successo.');
        }
    }

    public function destroy($id)
    {
        $projection = Projection::findOrFail($id);
        $projection->delete();

        return redirect()->route('admin.projections.index')
            ->with('success', 'Proiezione eliminata con successo.');
    }
}
