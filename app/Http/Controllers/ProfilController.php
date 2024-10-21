<?php
// app/Http/Controllers/ProfilController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Formateur;
use App\Models\admin;
use App\Models\formation;
use App\Models\avis;



class ProfilController extends Controller
{
    public function showProfil()
    {
        // Récupérer l'ID de l'utilisateur à partir de la session
        $userId = session('user_id');
        $tableName = session('user_table');

        // Dynamically select the model based on the table name
        $userModel = null;
        switch ($tableName) {
            case 'users':
                $userModel = User::class;
                break;
            case 'formateurs':
                $userModel = formateur::class;
                break;
            case 'admins':
                $userModel = admin::class;
                break;
            // Add more cases for other user types if needed
        }

        // Check if the model is valid
        if ($userModel) {
            // Fetch user information
            $user = $userModel::find($userId);

            // Check if the user exists
            if ($user) {
                

                switch ($tableName) {
                    case 'users':
                        $formationData = avis::where('poster', $userId)->get();
                        break;
                    case 'formateurs':
                        $formationData = Formation::where('poster', $userId)->get();
                        break;
                    case 'admins':
                        $formationData = avis::where('poster', $userId)->get()+Formation::where('poster', $userId)->get();                        ;
                        break;
                    // Add more cases for other user types if needed
                }
                
                $combinedData = [
                    'user' => $user,
                    'formations' => $formationData
                ];





                return view('profil', compact('combinedData'));
            } 




        } else {
            // Handle the case where the user model is not found
            return redirect()->route('accueil')->with('error', 'Modèle utilisateur non trouvé');
        }
    }
    public function deleteFormation($id)
{
    // Trouvez la formation à supprimer

    $formation = avis::find($id);
    if(!$formation){
        $formation = formation::find($id);
    }

    // Vérifiez si la formation existe
    if ($formation) {
        // Supprimez la formation
        $formation->delete();

        return redirect('/profil');
    }

    return redirect()->back()->with('error', 'Formation non trouvée.');
}
}
