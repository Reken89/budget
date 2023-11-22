<?php

namespace App\Structure\DevSection\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DevSendingRequest extends FormRequest
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
