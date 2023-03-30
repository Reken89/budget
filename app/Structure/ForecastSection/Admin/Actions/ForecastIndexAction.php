<?php

namespace App\Structure\ForecastSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\ForecastSection\Admin\Dto\ForecastIndexDto;
use App\Structure\ForecastSection\Admin\Tasks\ForecasSelectTarrifTask;
use App\Structure\ForecastSection\Admin\Tasks\ForecasSelectCommunalTask;
use App\Structure\ForecastSection\Admin\Tasks\ForecasSelectCommunalTotalTask;

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
        $communal = $this->task(ForecasSelectCommunalTask::class)->run($dto);
        $total = $this->task(ForecasSelectCommunalTotalTask::class)->run($dto);
        
        $result = [
            'tarrifs'  => $tarrifs,
            'communal' => $communal,
            'total'    => $total,
            'variant'  => $dto->chapter,
        ];
        
        return $result;

    }
}