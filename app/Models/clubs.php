<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clubs extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function formateurs()
    {
        return $this->hasMany(Formateur::class);
    }
}
