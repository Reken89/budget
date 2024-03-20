<?php

namespace App\Structure\DeloSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\DeloSection\User\Tasks\DeloSelectTask;

class DeloInfoAction extends BaseAction
{
    /**
     * Получаем всю информацию из таблицы documents
     *
     * @param
     * @return
     */
    public function SelectAll()
    {   
        $result = $this->task(DeloSelectTask::class)->SelectAll();        
        return $result;
    }
}
