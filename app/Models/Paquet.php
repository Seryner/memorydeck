<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquet extends Model
{
    use HasFactory;

    protected $table = 'paquets';
    protected $fillable = [
        'user_id',
        'nom'
    ];
    

    // Définition des relations
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mots()
    {
        return $this->hasMany(Mot::class);
    }
}
