<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Utilisateur extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public function scopeRechercher($q, $recherche)
    {
        $q->where('utilisateurs.code_Utl', 'like', "%$recherche%")
            ->orWhere('nom_Utl', 'like', "%$recherche%")
            ->orWhere('prenom_Utl', 'like', "%$recherche%");
    }
}