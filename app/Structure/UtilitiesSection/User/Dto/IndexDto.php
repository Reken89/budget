<?php

namespace App\Structure\UtilitiesSection\User\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\UtilitiesSection\User\Requests\IndexRequest;

class IndexDto extends BaseDto
{
    public array $year;
    public array $mounth;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param IndexRequest $request
     * @return static
     */
    public static function fromRequest(IndexRequest $request): self
    {
        return new self([
            'year'   => $request->get('year'),
            'mounth' => $request->get('mounth'),
        ]);
    }
}
