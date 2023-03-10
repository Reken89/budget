<?php

namespace App\Structure\OfsSection\User\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\OfsSection\User\Requests\OfsResetRequest;

class OfsResetDto extends BaseDto
{
    public int    $mounth;
    public int    $year;
    public int    $id;
    public int    $chapter;
    public int    $number;
    public int    $user_id;
    public int    $main_id;
    public int    $shared_id;
    public int    $ekr_id;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param OfsIndexRequest $request
     * @return static
     */
    public static function fromRequest(OfsResetRequest $request): self
    {
        return new self([
            'mounth'    => $request->get('mounth'),
            'year'      => $request->get('year'),
            'id'        => $request->get('id'),
            'chapter'   => $request->get('chapter'),
            'number'    => $request->get('number'),
            'user_id'   => $request->get('user_id'),
            'main_id'   => $request->get('main_id'),
            'shared_id' => $request->get('shared_id'),
            'ekr_id'    => $request->get('ekr_id'),
        ]);
    }
}

