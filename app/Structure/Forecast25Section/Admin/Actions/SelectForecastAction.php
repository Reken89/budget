<?php

namespace App\Structure\Forecast25Section\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Forecast25Section\Admin\Tasks\SelectForecastTask;

class SelectForecastAction extends BaseAction
{
    /**
     * Возвращает прогноз
     *
     * @param string $title
     * @return array
     */
    public function SelectForecast(string $title): array
    {        
        if($title == "all"){
            return $this->task(SelectForecastTask::class)->SelectAll();
        }else{
            return $this->task(SelectForecastTask::class)->SelectSection($title);
        }
    }   
}

