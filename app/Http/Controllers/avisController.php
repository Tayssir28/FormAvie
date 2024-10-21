<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use Illuminate\Http\Request;
use App\Models\User;

class AvisController extends Controller
{
    public function index()
    {
        $avis = Avis::all(); 
        return view('avis', compact('avis'));
    }

    public function create()
    {
        return view('avis.create');
    }

    public function store(Request $request)
    {
        $userId = session('user_id');
        $request->validate([
            'title' => 'required|string|max:255',
            'contenue' => 'required|string',
            'date' => 'required|date',
        ]);

        $requestData = $request->all();
        $requestData['poster'] = $userId;

        Avis::create($requestData);

        return redirect('/avis'); 
    }

    public function show($id)
    {
        $avis = Avis::findOrFail($id);
        return view('avis.show', compact('avis'));
    }

    public function edit($id)
    {
        $avis = Avis::findOrFail($id);
        return view('avis.edit', compact('avis'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'contenue' => 'required|string',
            'date' => 'required|date',
            'poster' => 'required|exists:users,id',
        ]);

        $avis = Avis::findOrFail($id);
        $avis->update($request->all());

        return redirect()->route('avis.index')->with('success', 'Avis updated successfully');
    }

    public function destroy($id)
    {
        $avis = Avis::findOrFail($id);
        $avis->delete();

        return redirect()->route('avis.index')->with('success', 'Avis deleted successfully');
    }


    public function getUserInfo($userId)
{
    return User::findOrFail($userId);
}
}