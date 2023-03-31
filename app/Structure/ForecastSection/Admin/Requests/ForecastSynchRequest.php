<?php

namespace App\Structure\ForecastSection\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForecastSynchRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'year_one' => 'required|integer',
            'year_two' => 'required|integer',
        ];
    }   
}
