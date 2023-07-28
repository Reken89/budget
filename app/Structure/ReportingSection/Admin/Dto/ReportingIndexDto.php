<?php

namespace App\Structure\ReportingSection\Admin\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\ReportingSection\Admin\Requests\ReportingIndexRequest;

class ReportingIndexDto extends BaseDto
{
    public int       $year;
    public int       $mounth;
    public string    $meaning;
    
    /**
     * Возвращает DTO из объекта Request
     *
     * @param CommunalUpdateRequest $request
     * @return static
     */
    public static function fromRequest(ReportingIndexRequest $request): self
    {
        return new self([
            'year'    => $request->get('year'),
            'mounth'  => $request->get('mounth'),
            'meaning' => $request->get('meaning'),
        ]);
    }
}
