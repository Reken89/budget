<?php

namespace App\Structure\Count25Section\User\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\Count25Section\User\Requests\UpdateRequest;

class UpdateDto extends BaseDto
{
    public int      $id;
    public float    $sum;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param UpdateRequest $request
     * @return static
     */
    public static function fromRequest(UpdateRequest $request): self
    {
        return new self([
            'id'  => $request->get('id'),
            'sum' => $request->get('sum'),
        ]);
    }
}
