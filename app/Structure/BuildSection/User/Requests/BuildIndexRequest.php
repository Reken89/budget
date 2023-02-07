<?php

namespace App\Structure\BuildSection\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuildIndexRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'mounth'  => 'required|integer',
            'year'    => 'required|integer',
            'variant' => 'required|integer',
        ];
    }   
}
