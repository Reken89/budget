<?php

namespace App\Structure\CSection\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUpdateRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'year'      => 'required|integer',
            'mounth'    => 'required|integer',
            'user'      => 'required|integer',
            'variant'   => 'required|integer',
            'indicator' => 'required|integer',
            'number'    => 'required|integer',
            'meaning1'  => 'required|numeric|between:-999999999.99,999999999.99',
            'meaning2'  => 'required|numeric|between:-999999999.99,999999999.99',
            'meaning3'  => 'required|numeric|between:-999999999.99,999999999.99',
            'meaning4'  => 'required|numeric|between:-999999999.99,999999999.99',
            'meaning5'  => 'required|numeric|between:-999999999.99,999999999.99',
            'meaning6'  => 'required|numeric|between:-999999999.99,999999999.99',
            'meaning7'  => 'required|numeric|between:-999999999.99,999999999.99',
        ];
    }   
}

