<?php

namespace App\Structure\OfsSection\Admin\Requests;

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
            'user'    => 'required|array',
            'mounth'  => 'required|array',
            'year'    => 'required|array',
            'chapter' => 'required|array',
            'info'    => 'required|string',
        ];
    }   
}

