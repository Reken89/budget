<?php

namespace App\Structure\UtilitiesSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\UtilitiesSection\Admin\Models\Limit;

class SelectTarrifsTask extends BaseTask
{
    /**
     * Возвращает тарифы за выбранный год и месяц
     *
     * @param int $year, int $mounth
     * @return array
     */
    public function SelectTarrifs(int $year, int $mounth): array
    {        
        return Limit::select()    
            ->where('year', $year)
            ->where('mounth', $mounth) 
            ->get()
            ->toArray();
    }
    
}
