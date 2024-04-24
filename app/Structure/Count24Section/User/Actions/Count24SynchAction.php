<?php

namespace App\Structure\Count24Section\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Count24Section\User\Tasks\Count24SelectTask;
use App\Structure\Count24Section\User\Tasks\Count24UpdateTask;

class Count24SynchAction extends BaseAction
{ 
    /**
     * Получаем информацию из таблицы counts за 2025
     * Заполняем таблицу counts за 2026 и 2027 год
     *
     * @param 
     * @return
     */
    public function SynchYears(): bool
    {   
        $year = $this->task(Count24SelectTask::class)->SelectYear();
        $result = $this->task(Count24UpdateTask::class)->UpdateYears($year);
        return $result == true ? true : false;   
    }
}

