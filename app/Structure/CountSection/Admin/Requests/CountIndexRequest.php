<?php

namespace App\Structure\CountSection\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountIndexRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'year'    => 'required|array',
            'variant' => 'required|integer',
        ];
    }   
}