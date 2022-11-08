<?php

namespace App\Request;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
        /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name'           => 'nullable|string',
            'email'          => 'nullable|string',
            'subject'        => 'nullable|string',
            'mobile_number'  => 'required|string',
            'message'        => 'required|string',
        ];
    }   
}

