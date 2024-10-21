<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class participations extends Model
{
    use HasFactory;
    public function formations(){
        return $this->hasMany(formation::class);
    }
    public function users(){
        return $this->hasMany(User::class);
    }
}
