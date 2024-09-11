<?php

namespace App\Structure\Ofs25Section\User\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\Ofs25Section\User\Requests\Ofs25ResetRequest;

class Ofs25ResetDto extends BaseDto
{
    public int    $mounth;
    public int    $chapter;
    public int    $number;
    public int    $user_id;
    public int    $ekr_id;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param Ofs25ResetRequest $request
     * @return static
     */
    public static function fromRequest(Ofs25ResetRequest $request): self
    {
        return new self([
            'mounth'  => $request->get('mounth'),
            'chapter' => $request->get('chapter'),
            'number'  => $request->get('number'),
            'user_id' => $request->get('user_id'),
            'ekr_id'  => $request->get('ekr_id'),
        ]);
    }
}

