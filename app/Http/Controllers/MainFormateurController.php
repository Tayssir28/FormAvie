<?php

namespace App\Http\Controllers;

use App\Http\Controllers\clubController;
use App\Http\Controllers\formateurController;
use Illuminate\Http\Request;

class MainFormateurController extends Controller
{
    public function index(Request $request)
    {
        // Fetch data from clubController
        $clubController = app(clubController::class);
        $clubs = $clubController->index($request);

        // Fetch data from formateurController
        $formateurController = app(formateurController::class);
        $formateurs = $formateurController->index($request);

        // Combine the data
        $combinedData = [
            'clubs' => $clubs,
            'formateurs' => $formateurs,
        ];

        // Return the combined data to the view
        return view('formateur', $combinedData);
    }
}
