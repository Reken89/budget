<?php

namespace App\Structure\CSection\Admin\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\CSection\Admin\Requests\AdminStatusRequest;

class AdminStatusDto extends BaseDto
{
    public int    $year;
    public int    $mounth;
    public int    $user;
    public int    $variant;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param AdminStatusRequest $request
     * @return static
     */
    public static function fromRequest(AdminStatusRequest $request): self
    {
        return new self([
            'year'      => $request->get('year'),
            'mounth'    => $request->get('mounth'),
            'user'      => $request->get('user'),
            'variant'   => $request->get('variant'),
        ]);
    }
}
