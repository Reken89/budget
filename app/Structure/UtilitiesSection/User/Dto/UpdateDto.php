<?php

namespace App\Structure\UtilitiesSection\User\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\UtilitiesSection\User\Requests\UpdateRequest;

class UpdateDto extends BaseDto
{
    public int      $id;
    public float    $volume;
    public float    $sum;
    public string   $service;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param UpdateRequest $request
     * @return static
     */
    public static function fromRequest(UpdateRequest $request): self
    {
        return new self([
            'id'      => $request->get('id'),
            'volume'  => $request->get('volume'),
            'sum'     => $request->get('sum'),
            'service' => $request->get('service'),
        ]);
    }
}

