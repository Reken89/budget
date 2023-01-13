<?php

namespace App\Structure\CommunalSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\CommunalSection\User\Models\Tarrifs;
use App\Structure\CommunalSection\Admin\Dto\CommunalIndexDto;

class TarrifsSelectTask extends BaseTask
{
    /**
     * Возвращает тарифы за выбранный год и месяц
     *
     * @param array $year, array $mounth
     * @return array
     */
    public function run(array $year, array $mounth): array
    {        
        $info = Tarrifs::select()    
            ->where('year', $year)
            ->where('mounth', $mounth) 
            ->first()
            ->toArray();
        
        return $info;  

    }
}

