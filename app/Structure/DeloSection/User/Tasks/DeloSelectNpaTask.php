<?php

namespace App\Structure\DeloSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\DeloSection\User\Models\Npa;

class DeloSelectNpaTask extends BaseTask
{
    /**
     * Возвращает таблицу npa
     *
     * @param
     * @return
     */
    public function SelectAll()
    {
        $result = Npa::select() 
            ->get()
            ->toArray();
        return $result;
    }
}  

