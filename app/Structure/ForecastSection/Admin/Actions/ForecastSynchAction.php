<?php

namespace App\Structure\ForecastSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\ForecastSection\Admin\Dto\ForecastSynchDto;
use App\Structure\ForecastSection\Admin\Tasks\ForecasSelectTask;
use App\Structure\ForecastSection\Admin\Tasks\ForecasSelectTarrifTask;
use App\Structure\ForecastSection\Admin\Tasks\ForecasUpdateCommunalTask;

class ForecastSynchAction extends BaseAction
{
    /**
     * Возвращает таблицу тарифов
     * 
     * @param ForecastSynchDto $dto
     * @return 
     */
    public function run(ForecastSynchDto $dto): bool
    {                    
        //id из таблицы users
        $users = [
            3, 4, 5, 7, 8,
            9, 10, 11, 12, 13,
            14, 15, 16, 17, 18,
            19, 20, 21, 22, 23,
            ];
        
        $mounth_one = [
            1, 2, 3, 4, 5, 6,
        ];
        
        $mounth_two = [
            7, 8, 9, 10, 11, 12,
        ];
        
        foreach ($users as $user) {
            //Получаем значения из таблицы коммунальные услуги за первое и второе полугодия
            $communal_one = $this->task(ForecasSelectTask::class)->run($dto->year_one, $mounth_one, $user);
            $communal_two = $this->task(ForecasSelectTask::class)->run($dto->year_two, $mounth_two, $user);
            
            //Получаем тарифы
            $tarrifs = $this->task(ForecasSelectTarrifTask::class)->run();
            
            //Обнавляем значения в таблице прогноза коммуналки
            $result = $this->task(ForecasUpdateCommunalTask::class)->run($communal_one, $communal_two, $tarrifs, $user);
        }
        
        return $result;

    }
}

