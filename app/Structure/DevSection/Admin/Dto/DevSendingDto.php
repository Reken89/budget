<?php

namespace App\Structure\DevSection\Admin\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\DevSection\Admin\Requests\DevSendingRequest;

class DevSendingDto extends BaseDto
{
    public int    $id;
    public int    $year;
    public int    $mounth;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param DevChangeRequest $request
     * @return static
     */
    public static function fromRequest(DevSendingRequest $request): self
    {
        return new self([
            'id'     => $request->get('id'),
            'year'   => $request->get('year'),
            'mounth' => $request->get('mounth'),
        ]);
    }
}