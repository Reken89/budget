<?php

namespace App\Structure\UtilitiesSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\UtilitiesSection\Admin\Models\Limit;
use App\Structure\UtilitiesSection\Admin\Dto\IndexDto;

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
    
    /**
     * Возвращает один выбранный тариф
     *
     * @param int $year, int $mounth, string $title
     * @return array
     */
    public function SelectOneTarrif(int $year, int $mounth, string $title): array
    {        
        return Limit::select()    
            ->where('year', $year)
            ->where('mounth', $mounth - 1) 
            ->where('title', $title)     
            ->first()
            ->toArray();
    }
}

