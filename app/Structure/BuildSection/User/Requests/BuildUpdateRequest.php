<?php

namespace App\Structure\BuildSection\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuildUpdateRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'id'           => 'required|integer',
            'user_id'      => 'required|integer',
            'work_id'      => 'required|integer',
            'mounth'       => 'required|integer',
            'year'         => 'required|integer',
            'number'       => 'required|string',
            'period'       => 'required|string',
            'contract_sum' => 'required|numeric',
            'kassa_sum'    => 'required|numeric',
            'fact_sum'     => 'required|numeric',
        ];
    }   
}


