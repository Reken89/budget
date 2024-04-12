<?php

namespace App\Structure\Count24Section\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Count24UpdateRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'id'  => 'required|integer',
            'sum' => 'required|numeric|between:0.00,999999999.99',
        ];
    }   
}

