<?php

namespace App\Structure\DevSection\Admin\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\DevSection\Admin\Requests\DevIndexRequest;

class DevIndexDto extends BaseDto
{
    public int    $year;
    public int    $mounth;
    public string $info;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param CommunalSendingRequest $request
     * @return static
     */
    public static function fromRequest(DevIndexRequest $request): self
    {
        return new self([
            'year'   => $request->get('year'),
            'mounth' => $request->get('mounth'),
            'info'   => $request->get('info'),
        ]);
    }
}

