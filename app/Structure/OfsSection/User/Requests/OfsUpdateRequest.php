<?php

namespace App\Structure\OfsSection\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfsUpdateRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'id'               => 'required|integer',
            'user_id'          => 'required|integer',
            'main_id'          => 'required|integer',
            'shared_id'        => 'required|integer',
            'mounth'           => 'required|integer',
            'year'             => 'required|integer',
            'chapter'          => 'required|integer',
            'number'           => 'required|integer',
            'lbo'              => 'required|numeric|between:0.000,99999999.999',
            'prepaid'          => 'required|numeric|between:0.000,99999999.999',
            'credit_year_all'  => 'required|numeric|between:0.000,99999999.999',
            'credit_year_term' => 'required|numeric|between:0.000,99999999.999',
            'debit_year_all'   => 'required|numeric|between:0.000,99999999.999',
            'debit_year_term'  => 'required|numeric|between:0.000,99999999.999',
            'fact_mounth'      => 'required|numeric|between:0.000,99999999.999',
            'kassa_mounth'     => 'required|numeric|between:0.000,99999999.999',
            'credit_end_all'   => 'required|numeric|between:0.000,99999999.999',
            'credit_end_term'  => 'required|numeric|between:0.000,99999999.999',
            'debit_end_all'    => 'required|numeric|between:0.000,99999999.999',
            'debit_end_term'   => 'required|numeric|between:0.000,99999999.999',
            'return_old_year'  => 'required|numeric|between:0.000,99999999.999',
        ];
    }   
}

