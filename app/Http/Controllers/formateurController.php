<?php

namespace App\Http\Controllers;

use App\Models\Formateur;
use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FormateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formateurs = Formateur::all();
        return view('formateur', compact('formateurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clubs = Club::all(); // Récupérer tous les clubs
        return view('formateurs.create', compact('clubs')); // Passer les clubs à la vue
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:formateurs',
            'password' => 'required|string|min:8|confirmed',
            'club' => 'required|exists:clubs,id',
        ]);

        Formateur::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'club' => $request->club,
        ]);

        return redirect()->route('formateurs.index')->with('success', 'Formateur created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $formateur = Formateur::findOrFail($id);
        return view('formateurs.show', compact('formateur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $formateur = Formateur::findOrFail($id);
        $clubs = Club::all();
        return view('formateurs.edit', compact('formateur', 'clubs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:formateurs,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
            'club_id' => 'required|exists:clubs,id',
        ]);

        $formateur = Formateur::findOrFail($id);

        $data = $request->except('password');
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $formateur->update($data);

        return redirect()->route('formateurs.index')
                         ->with('success', 'Formateur updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $formateur = Formateur::findOrFail($id);
        $formateur->delete();

        return redirect()->route('formateurs.index')
                         ->with('success', 'Formateur deleted successfully');
    }
}
