<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class fournisseurRequest extends FormRequest
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
            'nom_frs' => 'required|min:4|max:60',
            'abv_frs' => 'max:20',
            'adr_frs' => 'required|min:5|max:90',
            'cpt_frs' => 'max:40',
            'tel_frs' => 'required|min:4|max:30',
            'fax_frs' => 'max:25',
            'mail_frs' => 'max:35',
        ];
    }
}