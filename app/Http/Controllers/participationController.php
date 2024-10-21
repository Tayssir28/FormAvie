<?php

namespace App\Http\Controllers;

use App\Models\Participations;
use Illuminate\Http\Request;

class ParticipationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $participations = Participations::all();
        return view('participations.index', compact('participations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('participations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'formation' => 'required|exists:formations,id',
            'participant' => 'required|exists:users,id',
        ]);

        Participations::create($request->all());

        return redirect()->route('participations.index')
                         ->with('success', 'Participation created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $participation = Participations::findOrFail($id);
        return view('participations.show', compact('participation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $participation = Participations::findOrFail($id);
        return view('participations.edit', compact('participation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'formation' => 'required|exists:formations,id',
            'participant' => 'required|exists:users,id',
        ]);

        $participation = Participations::findOrFail($id);
        $participation->update($request->all());

        return redirect()->route('participations.index')
                         ->with('success', 'Participation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $participation = Participations::findOrFail($id);
        $participation->delete();

        return redirect()->route('participations.index')
                         ->with('success', 'Participation deleted successfully');
    }
}
