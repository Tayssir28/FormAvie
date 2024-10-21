<?php

namespace App\Http\Controllers;

use App\Models\Commentaires_formations;
use Illuminate\Http\Request;

class commentaires_formationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commentaires = commentaires_formations::all();
        return view('commentaires_formations.index', compact('commentaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('commentaires_formations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
            'commenter' => 'required|exists:users,id',
            'formation' => 'required|exists:formations,id',
            'date' => 'required|date',
        ]);

        commentaires_formations::create($request->all());

        return redirect()->route('commentaires_formations.index')
                         ->with('success', 'Commentaire created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $commentaire = commentaires_formations::findOrFail($id);
        return view('commentaires_formations.show', compact('commentaire'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $commentaire = commentaires_formations::findOrFail($id);
        return view('commentaires_formations.edit', compact('commentaire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'content' => 'required|string',
            'commenter' => 'required|exists:users,id',
            'formation' => 'required|exists:formations,id',
            'date' => 'required|date',
        ]);

        $commentaire = commentaires_formations::findOrFail($id);
        $commentaire->update($request->all());

        return redirect()->route('commentaires_formations.index')
                         ->with('success', 'Commentaire updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $commentaire = commentaires_formations::findOrFail($id);
        $commentaire->delete();

        return redirect()->route('commentaires_formations.index')
                         ->with('success', 'Commentaire deleted successfully');
    }
}
