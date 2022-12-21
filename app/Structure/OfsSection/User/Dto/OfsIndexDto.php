<?php

namespace App\Structure\OfsSection\User\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\OfsSection\User\Requests\OfsIndexRequest;

class OfsIndexDto extends BaseDto
{
    public int    $mounth;
    public int    $year;
    public int    $user;
    public int    $chapter;
    public string $info;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param OfsIndexRequest $request
     * @return static
     */
    public static function fromRequest(OfsIndexRequest $request): self
    {
        return new self([
            'mounth'  => $request->get('mounth'),
            'year'    => $request->get('year'),
            'user'    => $request->get('user'),
            'chapter' => $request->get('chapter'),
            'info'    => $request->get('info'),
        ]);
    }
}
