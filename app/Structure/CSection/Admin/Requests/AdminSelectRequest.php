<?php

namespace App\Structure\CSection\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminSelectRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'year'    => 'required|integer',
            'mounth'  => 'required|integer',
            'user'    => 'required|array',
            'variant' => 'required|integer',
        ];
    }   
}

