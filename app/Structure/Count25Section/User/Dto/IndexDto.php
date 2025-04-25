<?php

namespace App\Structure\Count25Section\User\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\Count25Section\User\Requests\IndexRequest;

class IndexDto extends BaseDto
{
    public int    $year;
    public int    $variant;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param IndexRequest $request
     * @return static
     */
    public static function fromRequest(IndexRequest $request): self
    {
        return new self([
            'year'    => $request->get('year'),
            'variant' => $request->get('variant'),
        ]);
    }
}

