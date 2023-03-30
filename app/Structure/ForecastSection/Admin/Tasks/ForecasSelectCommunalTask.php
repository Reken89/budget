<?php

namespace App\Structure\ForecastSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\ForecastSection\Admin\Dto\ForecastIndexDto;
use App\Structure\ForecastSection\Admin\Models\Forecastcommunal;

class ForecasSelectCommunalTask extends BaseTask
{
    /**
     * Возвращает таблицу прогнозов по заданному параметру
     *
     * @param $chapter
     * @return array
     */
    public function run($chapter): array
    {        
        $info = Forecastcommunal::select()
            ->selectRaw("(`volume_one` + `volume_two`) AS volume_year")
            ->selectRaw("(`sum_one` + `sum_two`) AS sum_year")   
            ->with(['user:id,name'])    
            ->where('chapter', $chapter)
            ->get()
            ->toArray();
        
        return $info; 

    }   

    /**
     * Возвращает сумму всех значений по категориям
     *
     * @param $chapter
     * @return array
     */
    public function sum(): array
    {        
        $info = Forecastcommunal::selectRaw('(SUM(`sum_one`) + SUM(`sum_two`)) as sum')
            ->groupBy('user_id')
            ->get()
            ->toArray();
        
        return $info; 

    }  
}

