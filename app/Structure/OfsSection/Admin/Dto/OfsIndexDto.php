<?php

namespace App\Structure\OfsSection\Admin\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\OfsSection\Admin\Requests\OfsIndexRequest;

class OfsIndexDto extends BaseDto
{
    public array    $mounth;
    public array    $year;
    public array    $user;
    public array    $chapter;
    public string   $info;

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

