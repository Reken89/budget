<?php

namespace App\Structure\OfsSection\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfsResetRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'id'        => 'required|integer',
            'number'    => 'required|integer',
            'year'      => 'required|integer',
            'chapter'   => 'required|integer',
            'mounth'    => 'required|string',
            'user_id'   => 'required|string',
            'main_id'   => 'required|string',
            'shared_id' => 'required|string',
        ];
    }   
}

