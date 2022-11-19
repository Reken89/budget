<?php

namespace App\Structure\CommunalSection\Admin\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\CommunalSection\Admin\Requests\CommunalIndexRequest;

class CommunalIndexDto extends BaseDto
{
    public array    $mounth;
    public array    $year;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param CommunalIndexRequest $request
     * @return static
     */
    public static function fromRequest(CommunalIndexRequest $request): self
    {
        return new self([
            'mounth' => $request->get('mounth'),
            'year'   => $request->get('year'),
        ]);
    }
}

