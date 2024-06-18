<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HallMovie;

class ProjectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projections = HallMovie::all();
        return view('admin.projections.index', compact('projections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'hall_id' => 'required|integer',
            'movie_id' => 'required|integer',
            'start_time' => 'required|date_format:Y-m-d H:i:s',
        ]);

        HallMovie::create($request->all());

        return redirect()->route('admin.projections.index')
            ->with('success', 'Projection created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $projection = HallMovie::findOrFail($id);
        return view('admin.projections.show', compact('projection'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $projection = HallMovie::findOrFail($id);
        return view('admin.projections.edit', compact('projection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'hall_id' => 'required|integer',
            'movie_id' => 'required|integer',
            'start_time' => 'required|date_format:Y-m-d H:i:s',
        ]);

        $projection = HallMovie::findOrFail($id);
        $projection->update($request->all());

        return redirect()->route('admin.projections.index')
            ->with('success', 'Projection updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $projection = HallMovie::findOrFail($id);
        $projection->delete();

        return redirect()->route('admin.projections.index')
            ->with('success', 'Projection deleted successfully.');
    }
}
