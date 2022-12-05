<?php

namespace App\Structure\CommunalSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\CommunalSection\User\Dto\CommunalUpdateDto;
use App\Structure\CommunalSection\User\Models\Communal;

class CommunalUpdateAction extends BaseAction
{
    /**
     * Обновляет значения таблицы communals по id
     *
     * @param CommunalUpdateDto $dto
     * @return bool
     */
    public function run(CommunalUpdateDto $dto): bool
    {   
        $result = Communal::find($dto->id)
            ->update([                
                 'heat-volume'     => $dto->heat_volume,
                 'heat-sum'        => $dto->heat_sum,
                 'drainage-volume' => $dto->drainage_volume,
                 'drainage-sum'    => $dto->drainage_sum,
                 'negative-volume' => $dto->negative_volume,
                 'negative-sum'    => $dto->negative_sum,
                 'water-volume'    => $dto->water_volume,
                 'water-sum'       => $dto->water_sum,
                 'power-volume'    => $dto->power_volume,
                 'power-sum'       => $dto->power_sum,
                 'trash-volume'    => $dto->trash_volume,
                 'trash-sum'       => $dto->trash_sum,
                 'disposal-volume' => $dto->disposal_volume,
                 'disposal-sum'    => $dto->disposal_sum
            ]);
        
        return $result == true ? true : false;        
    }
}

