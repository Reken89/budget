<?php

namespace App\Structure\Forecast25Section\Admin\Requests;

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
            'id'         => 'required|integer',
            'tarrif_one' => 'required|numeric|between:0.000,999999.999',
            'tarrif_two' => 'required|numeric|between:0.000,999999.999',
        ];
    }   
}

