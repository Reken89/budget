<?php

namespace App\Structure\ForecastSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\ForecastSection\Admin\Dto\ForecastIndexDto;
use App\Structure\ForecastSection\Admin\Models\Forecastcommunal;

class ForecasSelectCommunalTotalTask extends BaseTask
{
    /**
     * Возвращает итоговую строчку из таблицы прогноза
     *
     * @param $chapter
     * @return array
     */
    public function run($chapter): array
    {        
        $info = Forecastcommunal::selectRaw('SUM(`volume_one`) as volume_one')
            ->selectRaw('SUM(`volume_two`) as volume_two')
            ->selectRaw('SUM(`sum_one`) as sum_one')
            ->selectRaw('SUM(`sum_two`) as sum_two') 
            ->selectRaw('SUM(`volume_one`) + SUM(`volume_two`) as volume_year') 
            ->selectRaw('SUM(`sum_one`) + SUM(`sum_two`) as sum_year')
            ->where('chapter', $chapter)
            ->first()
            ->toArray();

        return $info; 
    }
    
    /**
     * Возвращает сумму по всей таблице
     *
     * @param 
     * @return array
     */
    public function sum(): array
    {        
        $info = Forecastcommunal::selectRaw('SUM(`sum_one`) + SUM(`sum_two`) as sum')
            ->first()
            ->toArray();

        return $info; 
    }
}

