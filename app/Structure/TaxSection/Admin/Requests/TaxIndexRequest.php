<?php

namespace App\Structure\TaxSection\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaxIndexRequest extends FormRequest
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
        ];
    }   
}
