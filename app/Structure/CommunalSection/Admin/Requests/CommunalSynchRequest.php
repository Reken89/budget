<?php

namespace App\Structure\CommunalSection\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommunalSynchRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'year'   => 'required|integer',
            'mounth' => 'required|integer',
            'id'     => 'required|integer',
        ];
    }   
}

