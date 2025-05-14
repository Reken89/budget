<?php

namespace App\Structure\UtilitiesSection\Admin\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\UtilitiesSection\Admin\Requests\UpdateStatusRequest;

class UpdateStatusDto extends BaseDto
{
    public int $id;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param UpdateTarrifsRequest $request
     * @return static
     */
    public static function fromRequest(UpdateStatusRequest $request): self
    {
        return new self([
            'id' => $request->get('id'),
        ]);
    }
}

