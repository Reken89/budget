<?php

namespace App\Structure\DeloSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\DeloSection\User\Models\Correspondent;

class DeloSelectCorrTask extends BaseTask
{
    /**
     * Возвращает таблицу correspondents
     *
     * @param
     * @return
     */
    public function SelectAll()
    {
        $result = Correspondent::select()  
            ->orderBy('title', 'asc')     
            ->get()
            ->toArray();
        return $result;
    }
}  
