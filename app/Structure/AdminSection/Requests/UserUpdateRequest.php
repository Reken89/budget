<?php

namespace App\Structure\AdminSection\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'id'    => 'required|integer',
            'name'  => 'required|string',
            'email' => 'required|string',
            'role'  => 'required|string',
        ];
    }   
}

