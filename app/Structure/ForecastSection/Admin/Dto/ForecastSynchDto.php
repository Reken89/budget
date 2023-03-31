<?php

namespace App\Structure\ForecastSection\Admin\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\ForecastSection\Admin\Requests\ForecastSynchRequest;

class ForecastSynchDto extends BaseDto
{
    public int      $year_one;
    public int      $year_two;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param ForecastSynchRequest $request
     * @return static
     */
    public static function fromRequest(ForecastSynchRequest $request): self
    {
        return new self([
            'year_one' => $request->get('year_one'),
            'year_two' => $request->get('year_two'),
        ]);
    }
}
