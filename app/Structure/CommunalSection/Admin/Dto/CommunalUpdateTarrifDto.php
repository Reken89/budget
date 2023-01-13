<?php

namespace App\Structure\CommunalSection\Admin\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\CommunalSection\Admin\Requests\CommunalUpdateTarrifRequest;

class CommunalUpdateTarrifDto extends BaseDto
{
    public int      $id;
    public float    $heat_one;
    public float    $heat_two;
    public float    $drainage_one;
    public float    $drainage_two;
    public float    $negative_one;
    public float    $negative_two;
    public float    $water_one;
    public float    $water_two;
    public float    $power_one;
    public float    $power_two;
    public float    $trash_one;
    public float    $trash_two;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param CommunalUpdateTarrifRequest $request
     * @return static
     */
    public static function fromRequest(CommunalUpdateTarrifRequest $request): self
    {
        return new self([
            'id'           => $request->get('id'),
            'heat_one'     => $request->get('heat_one'),
            'heat_two'     => $request->get('heat_two'),
            'drainage_one' => $request->get('drainage_one'),
            'drainage_two' => $request->get('drainage_two'),
            'negative_one' => $request->get('negative_one'),
            'negative_two' => $request->get('negative_two'),
            'water_one'    => $request->get('water_one'),
            'water_two'    => $request->get('water_two'),
            'power_one'    => $request->get('power_one'),
            'power_two'    => $request->get('power_two'),
            'trash_one'    => $request->get('trash_one'),
            'trash_two'    => $request->get('trash_two'),
        ]);
    }
}
