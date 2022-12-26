<?php

namespace App\Structure\OfsSection\User\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\OfsSection\User\Requests\OfsStatusRequest;

class OfsStatusDto extends BaseDto
{
    public string    $mounth;
    public string    $year;
    public string    $user;
    public string    $chapter;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param OfsStatusRequest $request
     * @return static
     */
    public static function fromRequest(OfsStatusRequest $request): self
    {
        return new self([
            'mounth'    => $request->get('mounth'),
            'year'      => $request->get('year'),
            'user'      => $request->get('user'),
            'chapter'   => $request->get('chapter'),
        ]);
    }
}

