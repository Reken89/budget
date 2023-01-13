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
     * @param array $year, array $mounth
     * @return array
     */
    public function run(array $year, array $mounth): array
    {        
        $info = Communal::select()
            ->selectRaw("(`heat-sum` + `drainage-sum` + `negative-sum` +"
                    . "`water-sum` + `power-sum` + `trash-sum` + `disposal-sum`) AS total")    
            ->with(['user:id,name'])    
            ->whereIn('year', $year)
            ->whereIn('mounth', $mounth) 
            ->get()
            ->toArray();
        
        return $info;  

    }
}



