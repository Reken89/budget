<?php

namespace App\Structure\OfsSection\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfsIndexRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'user'    => 'required|integer',
            'mounth'  => 'required|integer',
            'year'    => 'required|integer',
            'chapter' => 'required|integer',
            'info'    => 'required|string',
        ];
    }   
}

