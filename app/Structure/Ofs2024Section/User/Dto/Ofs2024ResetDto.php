<?php

namespace App\Structure\Ofs2024Section\User\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\Ofs2024Section\User\Requests\Ofs2024ResetRequest;

class Ofs2024ResetDto extends BaseDto
{
    public int    $mounth;
    public int    $chapter;
    public int    $number;
    public int    $user_id;
    public int    $ekr_id;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param Ofs2024ResetRequest $request
     * @return static
     */
    public static function fromRequest(Ofs2024ResetRequest $request): self
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


