<?php

namespace App\Structure\DeloSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\DeloSection\User\Tasks\DeloSelectTask;
use App\Structure\DeloSection\User\Tasks\DeloSelectNpaTask;
use App\Structure\DeloSection\User\Tasks\DeloSelectUsersTask;
use App\Structure\DeloSection\User\Tasks\DeloSelectCorrTask;

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
        $documents = $this->task(DeloSelectTask::class)->SelectAll();    
        $npa = $this->task(DeloSelectNpaTask::class)->SelectAll(); 
        $users = $this->task(DeloSelectUsersTask::class)->SelectAll(); 
        $corr = $this->task(DeloSelectCorrTask::class)->SelectAll(); 
        return [
            'documents' => $documents,
            'npa'       => $npa,
            'users'     => $users,
            'corr'      => $corr
        ];
    }
}
