<?php

namespace App\Structure\Ofs2024Section\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Ofs2024ResetRequest extends FormRequest
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
