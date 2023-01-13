<?php

namespace App\Structure\CommunalSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\CommunalSection\User\Models\Tarrifs;
use App\Structure\CommunalSection\Admin\Dto\CommunalUpdateTarrifDto;

class CommunalUpdateTarrifAction extends BaseAction
{
    /**
     * Обновляет значения в таблице tarrifs по id
     *
     * @param CommunalUpdateTarrifDto $dto
     * @return bool
     */
    public function run(CommunalUpdateTarrifDto $dto): bool
    {
        $result = Tarrifs::find($dto->id)
            ->update([                
                 'heat-one'     => $dto->heat_one,
                 'heat-two'     => $dto->heat_two,
                 'drainage-one' => $dto->drainage_one,
                 'drainage-two' => $dto->drainage_two,
                 'negative-one' => $dto->negative_one,
                 'negative-two' => $dto->negative_two,
                 'water-one'    => $dto->water_one,
                 'water-two'    => $dto->water_two,
                 'power-one'    => $dto->power_one,
                 'power-two'    => $dto->power_two,
                 'trash-one'    => $dto->trash_one,
                 'trash-two'    => $dto->trash_two,
            ]);
        
        return $result == true ? true : false;

    }
}

