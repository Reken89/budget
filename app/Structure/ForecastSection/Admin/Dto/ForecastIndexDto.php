<?php

namespace App\Structure\ForecastSection\Admin\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\ForecastSection\Admin\Requests\ForecastIndexRequest;

class ForecastIndexDto extends BaseDto
{
    public string    $chapter;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param ForecastIndexRequest $request
     * @return static
     */
    public static function fromRequest(ForecastIndexRequest $request): self
    {
        return new self([
            'chapter' => $request->get('chapter'),
        ]);
    }
}