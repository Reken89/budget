<?php

namespace App\Structure\DevSection\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DevIndexRequest extends FormRequest
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

