<?php

namespace App\Structure\CommunalSection\User\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\CommunalSection\User\Requests\CommunalChangeRequest;

class CommunalChangeDto extends BaseDto
{
    public int      $id;
    public float    $volume;
    public float    $sum;
    public string   $service;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param CommunalChangeRequest $request
     * @return static
     */
    public static function fromRequest(CommunalChangeRequest $request): self
    {
        return new self([
            'id'      => $request->get('id'),
            'volume'  => $request->get('volume'),
            'sum'     => $request->get('sum'),
            'service' => $request->get('service'),
        ]);
    }
}
