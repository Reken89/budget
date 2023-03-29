<?php

namespace App\Structure\ForecastSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\ForecastSection\Admin\Dto\ForecastIndexDto;
use App\Structure\ForecastSection\Admin\Tasks\ForecasSelectTarrifTask;

class ForecastIndexAction extends BaseAction
{
    /**
     * Возвращает таблицу тарифов
     * 
     * @param 
     * @return 
     */
    public function run(ForecastIndexDto $dto)
    {    
        $tarrifs = $this->task(ForecasSelectTarrifTask::class)->run();
        
        $result = [
            'tarrifs' => $tarrifs,
        ];
        
        return $result;

    }
}