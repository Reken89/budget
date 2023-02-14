<?php

namespace App\Structure\CommunalSection\Admin\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\CommunalSection\Admin\Requests\CommunalSynchRequest;

class CommunalSynchDto extends BaseDto
{
    public int    $year;
    public int    $mounth;
    public int    $id;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param CommunalSynchRequest $request
     * @return static
     */
    public static function fromRequest(CommunalSynchRequest $request): self
    {
        return new self([
            'year'   => $request->get('year'),
            'mounth' => $request->get('mounth'),
            'id'     => $request->get('id'),
        ]);
    }
}

