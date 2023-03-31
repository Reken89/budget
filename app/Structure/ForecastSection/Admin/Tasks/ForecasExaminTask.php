<?php

namespace App\Structure\ForecastSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\CommunalSection\User\Models\Communal;

class ForecasExaminTask extends BaseTask
{
    /**
     * Получаем значения из таблицы коммунальные услуги
     * Которые содержат неточности
     *
     * @param int $year, array $mounth
     * @return array
     */
    public function run(int $year, array $mounth): array
    {        
        $info = Communal::selectRaw('group_concat(mounth) as mounth')
            ->where('year', $year)
            ->whereIn('mounth', $mounth)
            ->where('status', 2)    
            //->groupBy('mounth')
            ->get()
            ->toArray();
        
        return $info; 
        
    }   
   
}

