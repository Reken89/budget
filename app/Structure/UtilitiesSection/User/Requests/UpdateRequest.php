<?php

namespace App\Structure\UtilitiesSection\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'id'      => 'required|integer',
            'volume'  => 'required|numeric|between:0.0000,999999.999',
            'sum'     => 'required|numeric|between:0.00,1999999.99',
            'service' => 'required|string',
        ];
    }   
}
