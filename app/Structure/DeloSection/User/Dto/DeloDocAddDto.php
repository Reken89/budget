<?php

namespace App\Structure\DeloSection\User\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\DeloSection\User\Requests\DeloDocAddRequest;

class DeloDocAddDto extends BaseDto
{
    public string    $author;
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
    public static function fromRequest(DeloDocAddRequest $request): self
    {
        return new self([
            'author'        => $request->get('author'),
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

