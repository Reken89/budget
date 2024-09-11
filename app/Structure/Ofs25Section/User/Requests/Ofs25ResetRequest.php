<?php

namespace App\Structure\Ofs25Section\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Ofs25ResetRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'number'    => 'required|integer',
            'chapter'   => 'required|integer',
            'mounth'    => 'required|string',
            'user_id'   => 'required|string',
            'ekr_id'    => 'required|string',
        ];
    }   
}
