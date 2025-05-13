<?php

namespace App\Structure\UtilitiesSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\UtilitiesSection\Admin\Dto\UpdateTarrifsDto;
use App\Structure\UtilitiesSection\Admin\Dto\SynchTarrifsDto;
use App\Structure\UtilitiesSection\Admin\Tasks\SelectTarrifsTask;
use App\Structure\UtilitiesSection\Admin\Tasks\UpdateTarrifsTask;

class UpdateAction extends BaseAction
{
    private array $tarrifs = ['heat', 'water', 'drainage', 'energy', 'trash', 'negative'];
    
    /**
     * Обновление тарифов
     *
     * @param UpdateTarrifsDto $dto
     * @return bool
     */
    public function UpdateTarrifs(UpdateTarrifsDto $dto): bool
    {           
        return $this->task(UpdateTarrifsTask::class)->UpdateTarrifs($dto);
    }
    
    /**
     * Синхронизация тарифов
     *
     * @param SynchTarrifsDto $dto
     * @return 
     */
    public function SynchTarrifs(SynchTarrifsDto $dto)
    {    
        foreach ($this->tarrifs as $value) {
            $tarrif = $this->task(SelectTarrifsTask::class)->SelectOneTarrif($dto->year, $dto->mounth, $value);
            $this->task(UpdateTarrifsTask::class)->UpdateOneTarrif($dto->year, $dto->mounth, $value, $tarrif);
        }

    }
              
}

