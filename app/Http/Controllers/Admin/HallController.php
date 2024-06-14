<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHallRequest;
use App\Http\Requests\UpdateHallRequest;
use App\Models\Hall;

class HallController extends Controller
{
    public function index()
    {
        $halls = Hall::all();
        return view('admin.halls.index', compact('halls'));
    }

    public function create()
    {
        return view('admin.halls.create');
    }

    public function store(StoreHallRequest $request)
    {
        Hall::create($request->validated());

        return redirect()->route('admin.halls.index')->with('success', 'Hall created successfully.');
    }

    public function show(Hall $hall)
    {
        return view('admin.halls.show', compact('hall'));
    }

    public function edit(Hall $hall)
    {
        return view('admin.halls.edit', compact('hall'));
    }

    public function update(UpdateHallRequest $request, Hall $hall)
    {
        $hall->update($request->validated());

        return redirect()->route('admin.halls.index')->with('success', 'Hall updated successfully.');
    }

    public function destroy(Hall $hall)
    {
        $hall->delete();
        return redirect()->route('admin.halls.index')->with('success', 'Hall deleted successfully.');
    }
}