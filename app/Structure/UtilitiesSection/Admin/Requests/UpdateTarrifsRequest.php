<?php

namespace App\Structure\UtilitiesSection\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTarrifsRequest extends FormRequest
{
        /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'id'         => 'required|integer',
            'tarrif_min' => 'required|numeric',
            'tarrif_max' => 'required|numeric',
        ];
    }   
}
