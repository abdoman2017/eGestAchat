<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fournisseur extends Model
{
    use SoftDeletes;
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    public function getDateFormat()
    {
        return 'Y-m-d H:i:s';
    }

    public function getNameFormatedAttribute()
    {

        if (request()->has('recherche')) {
            return str_replace(request('recherche'), '<mark>' . request('recherche') . '</mark>', $this->attributes['nom']);
        } else {
            return $this->attributes['nom'];
        }
    }
    public function getAddressFormatedAttribute()
    {

        if (request()->has('recherche')) {
            return str_replace(request('recherche'), '<mark>' . request('recherche') . '</mark>', $this->attributes['adresse']);
        } else {
            return $this->attributes['adresse'];
        }
    }

    public function scopeRechercher($q, $recherche)
    {
        $q->where('fournisseurs.nom', 'like', "%$recherche%")
            ->orWhere('adresse', 'like', "%$recherche%");
    }
}