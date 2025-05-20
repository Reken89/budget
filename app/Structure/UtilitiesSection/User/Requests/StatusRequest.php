<?php

namespace App\Structure\UtilitiesSection\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatusRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'id'     => 'required|integer',
            'status' => 'required|integer',
        ];
    }   
}

