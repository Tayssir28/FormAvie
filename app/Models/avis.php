<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    use HasFactory;

    protected $table = 'avis';
    protected $fillable = ['title', 'contenue', 'likes', 'date', 'poster'];
    
    public function user(){
        return $this->belongsTo(User::class, 'poster');
    }
    
    public function comments(){
        return $this->hasMany(CommentairesAvis::class);
    }
}
