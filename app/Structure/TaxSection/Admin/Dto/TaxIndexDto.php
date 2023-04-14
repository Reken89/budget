<?php

namespace App\Structure\TaxSection\Admin\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\TaxSection\Admin\Requests\TaxIndexRequest;

class TaxIndexDto extends BaseDto
{
    public int       $mounth;
    
    /**
     * Возвращает DTO из объекта Request
     *
     * @param TaxIndexRequest $request
     * @return static
     */
    public static function fromRequest(TaxIndexRequest $request): self
    {
        return new self([
            'mounth'     => $request->get('mounth'),
        ]);
    }
}