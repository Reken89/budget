<?php

namespace App\Structure\CommunalSection\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommunalSendingRequest extends FormRequest
{
        /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'id'     => 'required|string',
            'year'   => 'required|string',
            'mounth' => 'required|string',
        ];
    }   
}