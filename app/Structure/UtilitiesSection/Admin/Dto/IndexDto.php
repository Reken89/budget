<?php

namespace App\Structure\UtilitiesSection\Admin\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\UtilitiesSection\Admin\Requests\IndexRequest;

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

