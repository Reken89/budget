<?php

namespace App\Structure\CountSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\CountSection\Admin\Tasks\CountSynchTask;

class CountSynchYearsAction extends BaseAction
{
    /**
     * Получает информацию из таблицы СМЕТА относительно 2024 года
     * Обновляет значения в таблице СМЕТА относительно 2025 и 2026 года
     *
     * @param 
     * @return bool
     */
    public function run()
    {   
        $users = [
            35, 25, 27, 28,
            29, 26,
            9, 10, 11, 12, 13, 14, 15,
            18, 19,
            8, 36,
            23, 37, 38
        ];
        
        foreach ($users as $user) {
            //Получаем значения 2024 года
            $info = $this->task(CountSynchTask::class)->select($user);
            //Обновляем значения в 2025 и 2026 годах
            $this->task(CountSynchTask::class)->update($info, $user);
        }
               
    }
}

