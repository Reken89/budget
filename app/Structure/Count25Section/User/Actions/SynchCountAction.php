<?php

namespace App\Structure\Count25Section\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Count25Section\User\Tasks\UpdateCountTask;
use App\Structure\Count25Section\User\Tasks\SelectCountTask;

class SynchCountAction extends BaseAction
{   
    /**
     * Получаем информацию из таблицы counts за 2026
     * Заполняем таблицу counts за 2027 и 2028 год
     *
     * @param 
     * @return 
     */
    public function SynchYears()
    {   
        $info = $this->task(SelectCountTask::class)->SelectYear();
        foreach ($info as $value) {
            $value['sum_cb'] == 0 ? true : $this->task(UpdateCountTask::class)->UpdateYears($value);
        }
    }
    
}

