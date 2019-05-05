<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fournisseur extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function getNomFormatedAttribute()
    {

        if (request()->has('recherche')) {
            return str_replace(request('recherche'), '<mark>' . request('recherche') . '</mark>', $this->attributes['nom']);
        }

    }

    public function scopeRechercher($q, $recherche)
    {
        $q->where('fournisseurs.nom', 'like', "%$recherche%")
            ->orWhere('adresse', 'like', "%$recherche%");

    }
}