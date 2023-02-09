<?php

namespace App\Structure\BuildSection\User\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\BuildSection\User\Requests\BuildAddRequest;

class BuildAddDto extends BaseDto
{
    public int       $user_id;
    public int       $ekr_double;
    public string    $title;
    public string    $number;
    public string    $period;
    public int       $ekr;
    public float     $contract_sum;
    public float     $kassa_sum;
    public float     $fact_sum;
    public int       $mounth;
    public int       $year;
    

    /**
     * Возвращает DTO из объекта Request
     *
     * @param CommunalUpdateRequest $request
     * @return static
     */
    public static function fromRequest(BuildAddRequest $request): self
    {
        return new self([
            'user_id'      => $request->get('user_id'),
            'ekr_double'   => $request->get('ekr_double'),
            'title'        => $request->get('title'),
            'number'       => $request->get('number'),
            'period'       => $request->get('period'),
            'ekr'          => $request->get('ekr'),
            'contract_sum' => $request->get('contract_sum'),
            'kassa_sum'    => $request->get('kassa_sum'),
            'fact_sum'     => $request->get('fact_sum'),
            'mounth'       => $request->get('mounth'),
            'year'         => $request->get('year'),
        ]);
    }
}

