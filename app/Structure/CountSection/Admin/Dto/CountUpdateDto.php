<?php

namespace App\Structure\CountSection\Admin\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\CountSection\Admin\Requests\CountUpdateRequest;

class CountUpdateDto extends BaseDto
{
    public int      $id;
    public float    $sum_fu;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param CountUpdateRequest $request
     * @return static
     */
    public static function fromRequest(CountUpdateRequest $request): self
    {
        return new self([
            'id'     => $request->get('id'),
            'sum_fu' => $request->get('sum_fu'),
        ]);
    }
}
