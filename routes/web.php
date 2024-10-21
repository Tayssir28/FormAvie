<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AvisController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\CommentairesAvisController;
use App\Http\Controllers\CommentairesFormationsController;
use App\Http\Controllers\FormateurController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ParticipationController;
use App\Http\Controllers\MainFormationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\CheckSession;
use App\Http\Controllers\ProfilController;




Auth::routes();


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/profil', [ProfilController::class, 'showProfil'])->name('profil');
Route::delete('/profil/{id}', [ProfilController::class, 'deleteFormation'])->name('formation.delete');




Route::resource('formations', FormationController::class);
Route::resource('admins', AdminController::class);
Route::resource('avis', AvisController::class);
Route::resource('clubs', ClubController::class);
Route::resource('commentaires_avis', CommentairesAvisController::class);
Route::resource('commentaires_formations', CommentairesFormationsController::class);
Route::resource('formateurs', FormateurController::class);
Route::resource('participations', ParticipationController::class);
Route::resource('users', UserController::class);

Route::get('/formation', [MainFormationController::class, 'index']);

Route::get('/avis/create', [AvisController::class, 'create'])->name('avis.create');
Route::get('/formations-page', [FormationController::class, 'page'])->name('formations.index');

Route::post('/avis', [AvisController::class, 'store'])->name('avis.store');
Route::post('/profil', [ProfilController::class, 'showProfil'])->name('profil');
Route::get('/dash', function () {
    return view('dash');
});

// Corrected: Route for storing formateurs
Route::post('/formateurs', [FormateurController::class, 'store'])->name('formateurs.store');

Route::get('formateurs/create', [FormateurController::class, 'create'])->name('formateurs.create');

Route::get('/formateur/create', [MainFormateurController::class, 'index'])->name('formateurs.create');

Route::get('/avis-page', function () { 
    return view('avis');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/formateur', function () {
    return view('formateur');
});
Route::get('/formation-page', function () {
    return view('formation');
});

Route::get('/signIn', function () {
    return view('signIn');
});
Route::get('/User', function () {
    return view('User');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/signIn', function () {
    return view('signIn');
})->name('signIn');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');