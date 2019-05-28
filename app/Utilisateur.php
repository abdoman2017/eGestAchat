<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Utilisateur extends Model
{
    use SoftDeletes;
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    public function getDateFormat()
    {
        return 'Y-m-d H:i:s';
    }
    public function getCodeFormatedAttribute()
    {

        if (request()->has('recherche')) {
            return str_replace(request('recherche'), '<mark>' . request('recherche') . '</mark>', $this->attributes['code_Utl']);
        } else {
            return $this->attributes['code_Utl'];
        }
    }
    public function getNomFormatedAttribute()
    {

        if (request()->has('recherche')) {
            return str_replace(request('recherche'), '<mark>' . request('recherche') . '</mark>', $this->attributes['nom_Utl']);
        } else {
            return $this->attributes['nom_Utl'];
        }
    }
    public function getPrenomFormatedAttribute()
    {

        if (request()->has('recherche')) {
            return str_replace(request('recherche'), '<mark>' . request('recherche') . '</mark>', $this->attributes['prenom_Utl']);
        } else {
            return $this->attributes['prenom_Utl'];
        }
    }
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
        $q->leftJoin('directions', 'directions.id', '=', 'utilisateurs.direction_id')
            ->join('structures', 'structures.id', '=', 'utilisateurs.structure_id')
            ->join('privileges', 'privileges.id', '=', 'utilisateurs.privilege_id')
            ->join('profils', 'profils.id', '=', 'utilisateurs.profil_id')
            ->join('etats', 'etats.id', '=', 'utilisateurs.etat_id')
            ->where('utilisateurs.id', '=', "$id")
            ->select('utilisateurs.*', 'directions.libelle_dr', 'privileges.libelle_prv', 'profils.libelle_prf', 'structures.libelle_str', 'etats.libelle_etat')
            ->get();
    }
}