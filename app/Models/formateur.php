<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class formateur extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'password',
        'club_id',
    ];

    public function club()
    {
        return $this->belongsTo(Club::class);
    }

    public function formations()
    {
        return $this->hasMany(formation::class);
    }

    // Champ de la base de données utilisé pour le mot de passe
    public function getAuthPassword()
    {
        return $this->password;
    }

    // Nom du champ de la base de données utilisé pour le jeton de rappel
    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}
