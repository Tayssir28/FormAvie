<?php

namespace App\Http\Controllers;

use App\Models\clubs;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clubs = clubs::all(); // Assuming you have a Club model
        return $clubs;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clubs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        clubs::create($request->all());

        return redirect()->route('clubs.index')
                         ->with('success', 'Club created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $club = clubs::findOrFail($id);
        return view('clubs.show', compact('club'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $club = clubs::findOrFail($id);
        return view('clubs.edit', compact('club'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        $club = clubs::findOrFail($id);
        $club->update($request->all());

        return redirect()->route('clubs.index')
                         ->with('success', 'Club updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $club = clubs::findOrFail($id);
        $club->delete();

        return redirect()->route('clubs.index')
                         ->with('success', 'Club deleted successfully');
    }
}
