<?php

namespace App\Structure\OfsSection\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfsStatusRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'user'      => 'required|string',
            'year'      => 'required|string',
            'chapter'   => 'required|string',
            'mounth'    => 'required|string',
        ];
    }   
}

