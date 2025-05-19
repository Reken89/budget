<?php

namespace App\Structure\UtilitiesSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\UtilitiesSection\Admin\Models\Limit;
use App\Structure\UtilitiesSection\User\Dto\IndexDto;

class SelectTarrifsTask extends BaseTask
{
    /**
     * Возвращает тарифы за выбранный год и месяц
     *
     * @param IndexDto $dto
     * @return array
     */
    public function SelectTarrifs(IndexDto $dto): array
    {        
        return Limit::select()    
            ->where('year', $dto->year[0])
            ->where('mounth', $dto->mounth[0]) 
            ->get()
            ->toArray();
    }
    
}
