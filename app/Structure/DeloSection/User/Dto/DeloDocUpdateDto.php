<?php

namespace App\Structure\DeloSection\User\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\DeloSection\User\Requests\DeloDocUpdateRequest;

class DeloDocUpdateDto extends BaseDto
{
    public int       $id;
    public string    $variant;
    public string    $number;
    public int       $user;
    public int       $npa;
    public int       $correspondent;
    public string    $date;
    public string    $content;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param CommunalSendingRequest $request
     * @return static
     */
    public static function fromRequest(DeloDocUpdateRequest $request): self
    {
        return new self([
            'id'            => $request->get('id'),
            'variant'       => $request->get('variant'),
            'number'        => $request->get('number'),
            'user'          => $request->get('user'),
            'npa'           => $request->get('npa'),
            'correspondent' => $request->get('correspondent'),
            'date'          => $request->get('date'),
            'content'       => $request->get('content'),
        ]);
    }
}

