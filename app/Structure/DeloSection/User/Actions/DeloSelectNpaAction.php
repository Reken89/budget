<?php

namespace App\Structure\DeloSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\DeloSection\User\Tasks\DeloSelectNpaTask;

class DeloSelectNpaAction extends BaseAction
{
    /**
     * Возвращает таблицу npa
     *
     * @param 
     * @return
     */
    public function SelectNpa()
    {       
        return $this->task(DeloSelectNpaTask::class)->SelectAll();
    }
} 
