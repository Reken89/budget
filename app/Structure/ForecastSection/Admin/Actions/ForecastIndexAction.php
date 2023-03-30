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
        $chapter = $dto->chapter;
        
        if($dto->chapter == "svod"){
            $communal = [
                'heat'     => $this->task(ForecasSelectCommunalTask::class)->run('heat'),
                'water'    => $this->task(ForecasSelectCommunalTask::class)->run('water'),
                'drainage' => $this->task(ForecasSelectCommunalTask::class)->run('drainage'),
                'energy'   => $this->task(ForecasSelectCommunalTask::class)->run('energy'),
                'trash'    => $this->task(ForecasSelectCommunalTask::class)->run('trash'),
                'negative' => $this->task(ForecasSelectCommunalTask::class)->run('negative'),
                'total'    => $this->task(ForecasSelectCommunalTask::class)->sum(),
            ];
            $total = [
                'heat'     => $this->task(ForecasSelectCommunalTotalTask::class)->run('heat'),
                'water'    => $this->task(ForecasSelectCommunalTotalTask::class)->run('water'),
                'drainage' => $this->task(ForecasSelectCommunalTotalTask::class)->run('drainage'),
                'energy'   => $this->task(ForecasSelectCommunalTotalTask::class)->run('energy'),
                'trash'    => $this->task(ForecasSelectCommunalTotalTask::class)->run('trash'),
                'negative' => $this->task(ForecasSelectCommunalTotalTask::class)->run('negative'),
                'total'    => $this->task(ForecasSelectCommunalTotalTask::class)->sum(),
            ];
        }else{
            $communal = $this->task(ForecasSelectCommunalTask::class)->run($chapter);
            $total = $this->task(ForecasSelectCommunalTotalTask::class)->run($chapter);
        }
        
        $result = [
            'tarrifs'  => $tarrifs,
            'communal' => $communal,
            'total'    => $total,
            'variant'  => $dto->chapter,
        ];
        
        return $result;

    }
}