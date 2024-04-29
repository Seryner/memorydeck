<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mot extends Model
{
    use HasFactory;


    protected $table = 'mots';

    protected $fillable = [
        'paquet_id',
        'nom_fr',
        'nom_en'
    ];

    // Définition des relations

    public function paquet()
    {
        return $this->belongsTo(Paquet::class);
    }
}
