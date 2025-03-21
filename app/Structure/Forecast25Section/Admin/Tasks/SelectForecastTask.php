<?php

namespace App\Structure\Forecast25Section\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Forecast25Section\Admin\Models\Forecast;

class SelectForecastTask extends BaseTask
{
    /**
     * Возвращаем таблицу прогноза по услуге
     *
     * @param string $title
     * @return array
     */
    public function SelectSection(string $title): array
    {    
        $info = Forecast::select()
            ->selectRaw("(`volume_one` + `volume_two`) AS volume_year")
            ->selectRaw("(`sum_one` + `sum_two`) AS sum_year")   
            ->with(['user:id,name'])    
            ->where('title', $title)
            ->where('year', 2025)    
            ->get()
            ->toArray();
        
        return $info; 
    }
    
    /**
     * Возвращаем таблицу прогноза
     *
     * @param 
     * @return array
     */
    public function SelectAll(): array
    {    
        $info = Forecast::select()
            ->selectRaw("(`volume_one` + `volume_two`) AS volume_year")
            ->selectRaw("(`sum_one` + `sum_two`) AS sum_year")   
            ->with(['user:id,name'])    
            ->where('year', 2025)    
            ->get()
            ->toArray();
        
        return $info; 
    }
}

