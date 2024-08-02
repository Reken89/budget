<?php

namespace App\Structure\CSection\Admin\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\CSection\Admin\Requests\AdminSelectRequest;

class AdminSelectDto extends BaseDto
{
    public int    $year;
    public int    $mounth;
    public array  $user;
    public int    $variant;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param AdminSelectRequest $request
     * @return static
     */
    public static function fromRequest(AdminSelectRequest $request): self
    {
        return new self([
            'year'    => $request->get('year'),
            'mounth'  => $request->get('mounth'),
            'user'    => $request->get('user'),
            'variant' => $request->get('variant'),
        ]);
    }
}

