<?php

namespace App\Structure\CommunalSection\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommunalUpdateRequest extends FormRequest
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
            'heat_volume'      => 'required|numeric|between:0.000,999999.999',
            'heat_sum'         => 'required|numeric|between:0.00,999999.99',
            'drainage_volume'  => 'required|numeric|between:0.000,999999.999',
            'drainage_sum'     => 'required|numeric|between:0.00,999999.99',
            'negative_volume'  => 'required|numeric|between:0.000,999999.999',
            'negative_sum'     => 'required|numeric|between:0.00,999999.99',
            'water_volume'     => 'required|numeric|between:0.000,999999.999',
            'water_sum'        => 'required|numeric|between:0.00,999999.99',
            'power_volume'     => 'required|numeric|between:0.000,999999.999',
            'power_sum'        => 'required|numeric|between:0.00,999999.99',
            'trash_volume'     => 'required|numeric|between:0.000,999999.999',
            'trash_sum'        => 'required|numeric|between:0.00,999999.99',
            'disposal_volume'  => 'required|numeric|between:0.000,999999.999',
            'disposal_sum'     => 'required|numeric|between:0.00,999999.99',
        ];
    }   
}





