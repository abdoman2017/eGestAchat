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
        $q->join('directions', 'directions.id', '=', 'utilisateurs.direction_id')
            ->join('structures', 'structures.id', '=', 'utilisateurs.structure_id')
            ->join('privileges', 'privileges.id', '=', 'utilisateurs.privilege_id')
            ->join('profils', 'profils.id', '=', 'utilisateurs.profil_id')
            ->where('utilisateurs.code_Utl', 'like', "%$recherche%")
            ->orWhere('nom_Utl', 'like', "%$recherche%")
            ->orWhere('prenom_Utl', 'like', "%$recherche%")
            ->select('directions.libelle_dr', 'privileges.libelle_prv', 'profils.libelle_prf', 'structures.libelle_str', 'utilisateurs.*');
    }
    public function scopeTrouver($q, $id)
    {
        $q->join('directions', 'directions.id', '=', 'utilisateurs.direction_id')
            ->join('structures', 'structures.id', '=', 'utilisateurs.structure_id')
            ->join('privileges', 'privileges.id', '=', 'utilisateurs.privilege_id')
            ->join('profils', 'profils.id', '=', 'utilisateurs.profil_id')
            ->where('utilisateurs.id', '=', "$id")
            ->select('directions.libelle_dr', 'privileges.libelle_prv', 'profils.libelle_prf', 'structures.libelle_str', 'utilisateurs.*');

    }
}