<?php

namespace App\Structure\CommunalSection\User\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\CommunalSection\User\Requests\CommunalSendingRequest;

class CommunalSendingDto extends BaseDto
{
    public int    $id;
    public int    $year;
    public int    $mounth;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param CommunalSendingRequest $request
     * @return static
     */
    public static function fromRequest(CommunalSendingRequest $request): self
    {
        return new self([
            'id'     => $request->get('id'),
            'year'   => $request->get('year'),
            'mounth' => $request->get('mounth'),
        ]);
    }
}