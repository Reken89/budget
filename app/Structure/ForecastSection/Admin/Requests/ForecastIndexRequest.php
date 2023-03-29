<?php

namespace App\Structure\ForecastSection\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForecastIndexRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'chapter' => 'required|string',
        ];
    }   
}