<?php

namespace App\Structure\CommunalSection\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommunalUpdateTarrifRequest extends FormRequest
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
            'heat_one'     => 'required|numeric',
            'heat_two'     => 'required|numeric',
            'drainage_one' => 'required|numeric',
            'drainage_two' => 'required|numeric',
            'negative_one' => 'required|numeric',
            'negative_two' => 'required|numeric',
            'water_one'    => 'required|numeric',
            'water_two'    => 'required|numeric',
            'power_one'    => 'required|numeric',
            'power_two'    => 'required|numeric',
            'trash_one'    => 'required|numeric',
            'trash_two'    => 'required|numeric',
        ];
    }   
}

