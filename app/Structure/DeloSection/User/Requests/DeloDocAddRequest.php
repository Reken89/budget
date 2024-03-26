<?php

namespace App\Structure\DeloSection\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeloDocAddRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'author'        => 'required|string',
            'variant'       => 'required|string',
            'number'        => 'required|string',
            'user'          => 'required|integer',
            'npa'           => 'required|integer',
            'correspondent' => 'required|integer',
            'date'          => 'required|string',
            'content'       => 'required|string',
        ];
    }   
}

