<?php

namespace App\Structure\CommunalSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\CommunalSection\User\Models\Tarrifs;
use App\Structure\CommunalSection\Admin\Dto\CommunalSynchDto;

class CommunalSynchAction extends BaseAction
{
    /**
     * Выполняет синхронизацию тарифов согласно прошлому месяцу
     *
     * @param CommunalSynchDto $dto
     * @return bool
     */
    public function run(CommunalSynchDto $dto): bool
    {
        $tarifs = Tarrifs::select()
            ->where('year', $dto->year)
            ->where('mounth', $dto->mounth - 1)
            ->first()
            ->toArray();
        
        $result = Tarrifs::find($dto->id)
            ->update([                  
                'heat-one'     => $tarifs['heat-one'],
                'heat-two'     => $tarifs['heat-two'],
                'drainage-one' => $tarifs['drainage-one'],
                'drainage-two' => $tarifs['drainage-two'],
                'negative-one' => $tarifs['negative-one'],
                'negative-two' => $tarifs['negative-two'],
                'water-one'    => $tarifs['water-one'],
                'water-two'    => $tarifs['water-two'],
                'power-one'    => $tarifs['power-one'],
                'power-two'    => $tarifs['power-two'],
                'trash-one'    => $tarifs['trash-one'],
                'trash-two'    => $tarifs['trash-two'],
                'disposal-one' => $tarifs['disposal-one'],
                'disposal-two' => $tarifs['disposal-two'],
            ]);
        
        return $result == true ? true : false;
    }
}

