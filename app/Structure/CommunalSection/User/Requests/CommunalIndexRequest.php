<?php

namespace App\Structure\CommunalSection\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommunalIndexRequest extends FormRequest
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
            'info'    => 'required|string',
        ];
    }   
}

