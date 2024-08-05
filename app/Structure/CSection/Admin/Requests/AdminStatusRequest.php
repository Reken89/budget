<?php

namespace App\Structure\CSection\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminStatusRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'year'      => 'required|integer',
            'mounth'    => 'required|integer',
            'user'      => 'required|integer',
            'variant'   => 'required|integer',
        ];
    }   
}

