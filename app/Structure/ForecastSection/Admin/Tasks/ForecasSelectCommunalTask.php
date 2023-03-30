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
     * @param ForecastIndexDto $dto
     * @return array
     */
    public function run(ForecastIndexDto $dto): array
    {        
        $info = Forecastcommunal::select()
            ->selectRaw("(`volume_one` + `volume_two`) AS volume_year")
            ->selectRaw("(`sum_one` + `sum_two`) AS sum_year")   
            ->with(['user:id,name'])    
            ->where('chapter', $dto->chapter)
            ->get()
            ->toArray();
        
        return $info; 

    }       
}

