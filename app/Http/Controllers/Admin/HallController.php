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
        $newHall = Hall::create($request->validated());
        $newHall->generatePrice($newHall);

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
        if(  ($hall->seats =! $request->seats) && ($hall->isense != $request->isense) ){
            $hall->generatePrice($hall);
        }
        $hall->update($request->validated());
        return redirect()->route('admin.halls.index')->with('success', 'Hall updated successfully.');
    }

    public function destroy(Hall $hall)
    {
        $hall->delete();
        return redirect()->route('admin.halls.index')->with('success', 'Hall deleted successfully.');
    }
}