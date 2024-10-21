<?php

namespace App\Http\Controllers;

use App\Http\Controllers\clubController;
use App\Http\Controllers\formationController;

use Illuminate\Http\Request;

class MainFormationController extends Controller
{
    public function index(Request $request)
    {
        // Fetch data from clubController
        $clubData = app(clubController::class)->index($request);

        // Fetch data from formationController
        $formationData = app(formationController::class)->index($request);

        // Combine the data
        $combinedData = [
            'clubs' => $clubData,
            'formations' => $formationData
        ];

        // Return the combined data to the view
        return view('formation', compact('combinedData'));
    }
}
