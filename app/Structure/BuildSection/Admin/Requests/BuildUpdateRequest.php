<?php

namespace App\Structure\BuildSection\Admin\Requests;

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
            'id'         => 'required|integer',
            'ekr_double' => 'required|integer',
            'title'      => 'required|string',
            'ekr'        => 'required|integer',
            'fu_sum'     => 'required|numeric',
            'work_id'    => 'required|integer',
            'year'       => 'required|integer',
            'mounth'     => 'required|integer',
            'user_id'    => 'required|integer',
        ];
    }   
}

