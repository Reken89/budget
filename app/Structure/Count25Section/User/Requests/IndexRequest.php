<?php

namespace App\Structure\Count25Section\User\Requests;

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
            'year'    => 'required|integer',
            'variant' => 'required|integer',
        ];
    }   
}

