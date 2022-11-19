<?php

namespace App\Structure\CommunalSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\CommunalSection\User\Models\Communal;
use App\Structure\CommunalSection\Admin\Dto\CommunalIndexDto;

class CommunalSelectTask extends BaseTask
{
    /**
     * Возвращает коммунальные услуги за выбранный год и месяц
     *
     * @param CommunalIndexDto $dto
     * @return array
     */
    public function run(CommunalIndexDto $dto): array
    {        
        $info = Communal::select()
            ->with(['user:id,name'])    
            ->whereIn('year', $dto->year)
            ->whereIn('mounth', $dto->mounth) 
            ->get()
            ->toArray();
        
        return $info;  

    }
}



