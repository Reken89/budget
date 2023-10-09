<?php

namespace App\Structure\ReportingSection\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DebtUpdateRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'id'         => 'required|integer',
            'mundeb'     => 'required|numeric|between:0.0,999999999.9',
            'servmundeb' => 'required|numeric|between:0.0,999999999.9',
            'maxmunded'  => 'required|numeric|between:0.0,999999999.9',
            'bank'       => 'required|numeric|between:0.00,999999999.99',
            'credit'     => 'required|numeric|between:0.00,999999999.99',
        ];
    }   
}

