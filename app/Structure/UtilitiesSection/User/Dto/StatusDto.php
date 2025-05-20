<?php

namespace App\Structure\UtilitiesSection\User\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\UtilitiesSection\User\Requests\StatusRequest;

class StatusDto extends BaseDto
{
    public int    $id;
    public int    $status;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param StatusRequest $request
     * @return static
     */
    public static function fromRequest(StatusRequest $request): self
    {
        return new self([
            'id'     => $request->get('id'),
            'status' => $request->get('status'),
        ]);
    }
}
