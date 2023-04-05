<?php

namespace App\Structure\CountSection\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountUpdateRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'id'     => 'required|integer',
            'sum_fu' => 'required|numeric|between:0.00,99999999.99',
        ];
    }   
}

