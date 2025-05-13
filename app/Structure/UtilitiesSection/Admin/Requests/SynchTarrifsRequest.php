<?php

namespace App\Structure\UtilitiesSection\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SynchTarrifsRequest extends FormRequest
{
        /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'year'   => 'required|integer',
            'mounth' => 'required|integer',
        ];
    }   
}

