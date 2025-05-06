<?php

namespace App\Structure\UtilitiesSection\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'year'   => 'required|array',
            'mounth' => 'required|array',
        ];
    }   
}

