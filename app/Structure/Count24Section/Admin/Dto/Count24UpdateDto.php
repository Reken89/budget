<?php

namespace App\Structure\Count24Section\Admin\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\Count24Section\Admin\Requests\Count24UpdateRequest;

class Count24UpdateDto extends BaseDto
{
    public int      $id;
    public float    $sum;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param Count24UpdateRequest $request
     * @return static
     */
    public static function fromRequest(Count24UpdateRequest $request): self
    {
        return new self([
            'id'  => $request->get('id'),
            'sum' => $request->get('sum'),
        ]);
    }
}

