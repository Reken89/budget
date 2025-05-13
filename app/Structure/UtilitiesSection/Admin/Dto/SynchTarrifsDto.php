<?php

namespace App\Structure\UtilitiesSection\Admin\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\UtilitiesSection\Admin\Requests\SynchTarrifsRequest;

class SynchTarrifsDto extends BaseDto
{
    public int $year;
    public int $mounth;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param SynchTarrifsRequest $request
     * @return static
     */
    public static function fromRequest(SynchTarrifsRequest $request): self
    {
        return new self([
            'year'   => $request->get('year'),
            'mounth' => $request->get('mounth'),
        ]);
    }
}

