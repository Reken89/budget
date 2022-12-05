<?php

namespace App\Structure\CommunalSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\CommunalSection\User\Models\Communal;
use App\Structure\CommunalSection\Admin\Dto\CommunalIndexDto;

class CommunalSelectAllTask extends BaseTask
{
    /**
     * Возвращает коммунальные услуги за выбранный год и месяц
     * Складывает значения за несколько месяцев и годов
     *
     * @param CommunalIndexDto $dto
     * @return array
     */
    public function run(CommunalIndexDto $dto): array
    {        
        $info = Communal::select('user_id')
            ->selectRaw('SUM(`heat-volume`) as heat_volume')
            ->selectRaw('SUM(`heat-sum`) as heat_sum')
            ->selectRaw('SUM(`drainage-volume`) as drainage_volume')
            ->selectRaw('SUM(`drainage-sum`) as drainage_sum') 
            ->selectRaw('SUM(`negative-volume`) as negative_volume') 
            ->selectRaw('SUM(`negative-sum`) as negative_sum')
            ->selectRaw('SUM(`water-volume`) as water_volume')
            ->selectRaw('SUM(`water-sum`) as water_sum')
            ->selectRaw('SUM(`power-volume`) as power_volume') 
            ->selectRaw('SUM(`power-sum`) as power_sum')
            ->selectRaw('SUM(`trash-volume`) as trash_volume')
            ->selectRaw('SUM(`trash-sum`) as trash_sum')
            ->selectRaw('SUM(`disposal-volume`) as disposal_volume')
            ->selectRaw('SUM(`disposal-sum`) as disposal_sum')
            ->selectRaw('SUM(`heat-sum`) + SUM(`drainage-sum`) + SUM(`negative-sum`) '
                    . '+ SUM(`water-sum`) + SUM(`power-sum`) + SUM(`trash-sum`) '
                    . '+ SUM(`disposal-sum`) as total')
            ->with(['user:id,name'])    
            ->whereIn('year', $dto->year)
            ->whereIn('mounth', $dto->mounth) 
            ->groupBy('user_id')
            ->get()
            ->toArray();
        
        return $info;  

    }
}

