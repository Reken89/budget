<?php

namespace App\Structure\UtilitiesSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\UtilitiesSection\User\Dto\StatusDto;
use App\Structure\UtilitiesSection\User\Tasks\SelectCommunalsTask;
use App\Structure\UtilitiesSection\User\Tasks\SelectTarrifsTask;
use App\Structure\UtilitiesSection\User\Tasks\StatusTask;

class StatusAction extends BaseAction
{    
    /**
     * Выполняем проверку на правильность информации
     * Сверяем значения с диапозоном тарифов
     *
     * @param StatusDto $dto, array $name
     * @return 
     */
    public function ExaminStatus(StatusDto $dto, array $name)
    {   
        $communals = $this->task(SelectCommunalsTask::class)->SelectLine($dto->id);
        $tarrifs = $this->task(SelectTarrifsTask::class)->SelectTarrifs($communals['year'], $communals['mounth']);
        for($i = 0; $i < 6; $i++){
            $volume = "$name[$i]-volume";
            $sum = "$name[$i]-sum";
            $result = $this->task(StatusTask::class)->ExaminStatus($communals[$volume], $communals[$sum], $tarrifs[$i]['tarrif_min'], $tarrifs[$i]['tarrif_max']);
            if($result == false){
                return false;
            }           
        }
        return true;       
    }
    
}
