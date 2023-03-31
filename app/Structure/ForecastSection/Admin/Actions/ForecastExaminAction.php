<?php

namespace App\Structure\ForecastSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\ForecastSection\Admin\Dto\ForecastSynchDto;
use App\Structure\ForecastSection\Admin\Tasks\ForecasExaminTask;

class ForecastExaminAction extends BaseAction
{
    /**
     * Выполняем проверку на наличие ошибок в таблице 
     * Коммунальные услуги
     * 
     * @param ForecastSynchDto $dto
     * @return 
     */
    public function run(ForecastSynchDto $dto)
    {      
        $mounth_one = [
            1, 2, 3, 4, 5, 6,
        ];
        
        $mounth_two = [
            7, 8, 9, 10, 11, 12,
        ];
        
        $result_one = $this->task(ForecasExaminTask::class)->run($dto->year_one, $mounth_one);
        $result_two = $this->task(ForecasExaminTask::class)->run($dto->year_two, $mounth_two);
        
        $result = [
            'year_one' => $result_one, 
            'year_two' => $result_two,  
        ];
        
        return $result;

    }
}

