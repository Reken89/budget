<?php

namespace App\Structure\ReportingSection\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DebtIndexRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'year' => 'required|integer',
        ];
    }   
}

