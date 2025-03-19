<?php

namespace App\Structure\Forecast25Section\Admin\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\Forecast25Section\Admin\Requests\UpdateRequest;

class UpdateDto extends BaseDto
{
    public int      $id;
    public float    $tarrif_one;
    public float    $tarrif_two;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param ForecastUpdateRequest $request
     * @return static
     */
    public static function fromRequest(UpdateRequest $request): self
    {
        return new self([
            'id'         => $request->get('id'),
            'tarrif_one' => $request->get('tarrif_one'),
            'tarrif_two' => $request->get('tarrif_two'),
        ]);
    }
}

