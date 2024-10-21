<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'date', 'poster'];

    public function participations(){
        return $this->hasMany(Participation::class);
    }

    public function createur(){
        return $this->belongsTo(Formateur::class, 'poster');
    }

    public function commentaires(){
        return $this->hasMany(CommentairesFormations::class);
    }
}
