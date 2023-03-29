<?php

namespace App\Structure\ForecastSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\ForecastSection\Admin\Models\Forecasttarrif;

class ForecasSelectTarrifTask extends BaseTask
{
    /**
     * Возвращает тарифы
     *
     * @param 
     * @return 
     */
    public function run(): array
    {        
        $info = Forecasttarrif::select()  
            ->get() 
            ->toArray();
        
        return $info;

    }       
}

