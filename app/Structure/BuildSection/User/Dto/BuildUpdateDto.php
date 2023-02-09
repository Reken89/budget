<?php

namespace App\Structure\BuildSection\User\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\BuildSection\User\Requests\BuildUpdateRequest;

class BuildUpdateDto extends BaseDto
{
    public int       $id;
    public int       $user_id;
    public int       $work_id;
    public int       $mounth;
    public int       $year;
    public string    $number;
    public string    $period;
    public float     $contract_sum;
    public float     $kassa_sum;
    public float     $fact_sum;
 

    /**
     * Возвращает DTO из объекта Request
     *
     * @param CommunalUpdateRequest $request
     * @return static
     */
    public static function fromRequest(BuildUpdateRequest $request): self
    {
        return new self([
            'id'           => $request->get('id'),
            'user_id'      => $request->get('user_id'),
            'work_id'      => $request->get('work_id'),
            'mounth'       => $request->get('mounth'),
            'year'         => $request->get('year'),
            'number'       => $request->get('number'),
            'period'       => $request->get('period'),
            'contract_sum' => $request->get('contract_sum'),
            'kassa_sum'    => $request->get('kassa_sum'),
            'fact_sum'     => $request->get('fact_sum'),
        ]);
    }
}

