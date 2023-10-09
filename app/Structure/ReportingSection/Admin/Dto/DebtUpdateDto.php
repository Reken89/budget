<?php

namespace App\Structure\ReportingSection\Admin\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\ReportingSection\Admin\Requests\DebtUpdateRequest;

class DebtUpdateDto extends BaseDto
{
    public int      $id;
    public float    $mundeb;
    public float    $servmundeb;
    public float    $maxmunded;
    public float    $bank;
    public float    $credit;
    
    /**
     * Возвращает DTO из объекта Request
     *
     * @param DebtUpdateRequest $request
     * @return static
     */
    public static function fromRequest(DebtUpdateRequest $request): self
    {
        return new self([
            'id'         => $request->get('id'),
            'mundeb'     => $request->get('mundeb'),
            'servmundeb' => $request->get('servmundeb'),
            'maxmunded'  => $request->get('maxmunded'),
            'bank'       => $request->get('bank'),
            'credit'     => $request->get('credit'),
        ]);
    }
}
