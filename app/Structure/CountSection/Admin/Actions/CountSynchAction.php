<?php

namespace App\Structure\CountSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\CountSection\Admin\Tasks\CountSelectCommunalTask;
use App\Structure\CountSection\Admin\Tasks\CountUpdateCommunalTask;

class CountSynchAction extends BaseAction
{
    /**
     * Получает информацию из таблицы ПРОГНОЗ
     * Обновляет значения в таблице СМЕТА
     *
     * @param 
     * @return bool
     */
    public function run(): bool
    {   
        $users = [
            8, 9, 10, 11, 12,
            13, 14, 15, 16, 18,
            19, 23,
        ];
        
        foreach ($users as $user) {
            //Получаем значения прогноза
            $communal = $this->task(CountSelectCommunalTask::class)->run($user);
            //Обновляем коммуналку в СМЕТЕ
            $result = $this->task(CountUpdateCommunalTask::class)->run($communal, $user);
        }
        
        return $result;
        
    }
}
