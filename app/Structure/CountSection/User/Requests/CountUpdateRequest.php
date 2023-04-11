<?php

namespace App\Structure\CountSection\User\Requests;

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
            'id'        => 'required|integer',
            'sum_cb'    => 'required|numeric|between:0.00,999999999.99',
            'main_id'   => 'required|integer',
            'number'    => 'required|integer',
            'user_id'   => 'required|integer',
            'year'      => 'required|integer',
            'shared_id' => 'required|integer',
        ];
    }   
}

