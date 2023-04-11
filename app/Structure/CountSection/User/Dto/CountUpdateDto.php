<?php

namespace App\Structure\CountSection\User\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\CountSection\User\Requests\CountUpdateRequest;

class CountUpdateDto extends BaseDto
{
    public int      $id;
    public float    $sum_cb;
    public int      $main_id;
    public int      $number;
    public int      $user_id;
    public int      $year;
    public int      $shared_id;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param CountUpdateRequest $request
     * @return static
     */
    public static function fromRequest(CountUpdateRequest $request): self
    {
        return new self([
            'id'        => $request->get('id'),
            'sum_cb'    => $request->get('sum_cb'),
            'main_id'   => $request->get('main_id'),
            'number'    => $request->get('number'),
            'user_id'   => $request->get('user_id'),
            'year'      => $request->get('year'),
            'shared_id' => $request->get('shared_id'),
        ]);
    }
}


