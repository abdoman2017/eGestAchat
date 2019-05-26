<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UtilisateurRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'code_utilisateur' => 'required|min:2|max:20',
            'nom_utilisateur' => 'required|min:3|max:25',
            'prenom_utilisateur' => 'required|min:3|max:25',
            'directions' => 'required',
            'structures' => 'required',
            'profils' => 'required',
            'privileges' => 'required',
            'etats' => 'required',
        ];
    }
}