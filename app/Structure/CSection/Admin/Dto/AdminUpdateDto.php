<?php

namespace App\Structure\CSection\Admin\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\CSection\Admin\Requests\AdminUpdateRequest;

class AdminUpdateDto extends BaseDto
{
    public int    $year;
    public int    $mounth;
    public int    $user;
    public int    $variant;
    public int    $indicator;
    public int    $number;
    public float  $meaning1;
    public float  $meaning2;
    public float  $meaning3;
    public float  $meaning4;
    public float  $meaning5;
    public float  $meaning6;
    public float  $meaning7;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param AdminUpdateRequest $request
     * @return static
     */
    public static function fromRequest(AdminUpdateRequest $request): self
    {
        return new self([
            'year'      => $request->get('year'),
            'mounth'    => $request->get('mounth'),
            'user'      => $request->get('user'),
            'variant'   => $request->get('variant'),
            'indicator' => $request->get('indicator'),
            'number'    => $request->get('number'),
            'meaning1'  => $request->get('meaning1'),
            'meaning2'  => $request->get('meaning2'),
            'meaning3'  => $request->get('meaning3'),
            'meaning4'  => $request->get('meaning4'),
            'meaning5'  => $request->get('meaning5'),
            'meaning6'  => $request->get('meaning6'),
            'meaning7'  => $request->get('meaning7'),
        ]);
    }
}

