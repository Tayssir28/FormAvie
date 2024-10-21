<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Http\Controllers\clubController;
use Illuminate\Http\Request;
use App\Models\Club;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formations = Formation::all();
        //return view('formation', compact('formations'));
        return $formations;
    }

    public function page()
    {
        // Fetch data from clubController
        $clubData = app(clubController::class)->index();

        // Fetch data from formationController
        $formationData = Formation::all();

        // Combine the data
        $combinedData = [
            'clubs' => $clubData,
            'formations' => $formationData
        ];

        // Return the combined data to the view
        return view('formation', compact('combinedData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
        {
            $userId = session('user_id');
            $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required|string',
                'date' => 'required|date',
                // Ajoutez ici d'autres règles de validation au besoin
            ]);

            // Ajoutez 'poster' au tableau de données à sauvegarder
            $requestData = $request->all();
            $requestData['poster'] = $userId;

            Formation::create($requestData);

            // Utilisez la route correspondante à votre vue
            return redirect('/formation');        
        }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $formation = Formation::findOrFail($id);
        return view('formations.show', compact('formation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $formation = Formation::findOrFail($id);
        return view('formations.edit', compact('formation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'date' => 'required|date',
            'poster' => 'required|exists:formateurs,id',
        ]);

        $formation = Formation::findOrFail($id);
        $formation->update($request->all());

        return redirect()->route('formations.index')
                         ->with('success', 'Formation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $formation = Formation::findOrFail($id);
        $formation->delete();

        return redirect()->route('formations.index')
                         ->with('success', 'Formation deleted successfully');
    }
}
