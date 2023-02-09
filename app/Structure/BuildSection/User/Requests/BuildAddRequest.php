<?php

namespace App\Structure\BuildSection\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuildAddRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'user_id'      => 'required|integer',
            'ekr_double'   => 'required|integer',
            'title'        => 'required|string',
            'number'       => 'required|string',
            'period'       => 'required|string',
            'ekr'          => 'required|integer',
            'contract_sum' => 'required|numeric',
            'kassa_sum'    => 'required|numeric',
            'fact_sum'     => 'required|numeric',
            'mounth'       => 'required|integer',
            'year'         => 'required|integer',
        ];
    }   
}

