<?php

namespace App\Structure\Count24Section\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Count24IndexRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'year'    => 'required|integer',
            'variant' => 'required|integer',
        ];
    }   
}
