<?php

namespace App\Structure\Count24Section\Admin\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\Count24Section\Admin\Requests\Count24IndexRequest;

class Count24IndexDto extends BaseDto
{
    public int    $year;
    public int    $variant;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param Count24IndexRequest $request
     * @return static
     */
    public static function fromRequest(Count24IndexRequest $request): self
    {
        return new self([
            'year'    => $request->get('year'),
            'variant' => $request->get('variant'),
        ]);
    }
}
