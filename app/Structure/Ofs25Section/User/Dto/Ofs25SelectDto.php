<?php

namespace App\Structure\Ofs25Section\User\Dto;

use App\Core\Dto\BaseDto;
use Illuminate\Http\Request;

class Ofs25SelectDto extends BaseDto
{
    public int    $mounth;
    public array  $chapter;
    public int    $user;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param Request $request
     * @return static
     */
    public static function fromRequest(Request $request): self
    {
        return new self([
            'mounth'  => $request->get('mounth'),
            'chapter' => $request->get('chapter'),
            'user'    => $request->get('user'),
        ]);
    }
}