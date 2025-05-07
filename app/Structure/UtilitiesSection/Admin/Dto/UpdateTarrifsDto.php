<?php

namespace App\Structure\UtilitiesSection\Admin\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\UtilitiesSection\Admin\Requests\UpdateTarrifsRequest;

class UpdateTarrifsDto extends BaseDto
{
    public int   $id;
    public float $tarrif_min;
    public float $tarrif_max;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param UpdateTarrifsRequest $request
     * @return static
     */
    public static function fromRequest(UpdateTarrifsRequest $request): self
    {
        return new self([
            'id'         => $request->get('id'),
            'tarrif_min' => $request->get('tarrif_min'),
            'tarrif_max' => $request->get('tarrif_max'),
        ]);
    }
}

