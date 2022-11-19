<?php

namespace App\Structure\CommunalSection\Admin\Requests;

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
            'mounth' => 'required|array',
            'year'   => 'required|array',
        ];
    }   
}

