<?php

namespace App\Structure\DevSection\Admin\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\DevSection\Admin\Requests\DevChangeRequest;

class DevChangeDto extends BaseDto
{
    public int      $id;
    public float    $volume;
    public float    $sum;
    public string   $service;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param DevChangeRequest $request
     * @return static
     */
    public static function fromRequest(DevChangeRequest $request): self
    {
        return new self([
            'id'      => $request->get('id'),
            'volume'  => $request->get('volume'),
            'sum'     => $request->get('sum'),
            'service' => $request->get('service'),
        ]);
    }
}

