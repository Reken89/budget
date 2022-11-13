<?php

namespace App\Dto;

use App\Dto\BaseDto;
use App\Request\CommunalRequest;

class CommunalUpdateDto extends BaseDto
{
    public int      $id;
    public float    $heat_volume;
    public float    $heat_sum;
    public float    $drainage_volume;
    public float    $drainage_sum;
    public float    $negative_volume;
    public float    $negative_sum;
    public float    $water_volume;
    public float    $water_sum;
    public float    $power_volume;
    public float    $power_sum;
    public float    $trash_volume;
    public float    $trash_sum;
    public float    $disposal_volume;
    public float    $disposal_sum;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param CommunalRequest $request
     * @return static
     */
    public static function fromRequest(CommunalRequest $request): self
    {
        return new self([
            'id'                => $request->get('id'),
            'heat_volume'       => $request->get('heat_volume'),
            'heat_sum'          => $request->get('heat_sum'),
            'drainage_volume'   => $request->get('drainage_volume'),
            'drainage_sum'      => $request->get('drainage_sum'),
            'negative_volume'   => $request->get('negative_volume'),
            'negative_sum'      => $request->get('negative_sum'),
            'water_volume'      => $request->get('water_volume'),
            'water_sum'         => $request->get('water_sum'),
            'power_volume'      => $request->get('power_volume'),
            'power_sum'         => $request->get('power_sum'),
            'trash_volume'      => $request->get('trash_volume'),
            'trash_sum'         => $request->get('trash_sum'),
            'disposal_volume'   => $request->get('disposal_volume'),
            'disposal_sum'      => $request->get('disposal_sum'),
        ]);
    }
}

