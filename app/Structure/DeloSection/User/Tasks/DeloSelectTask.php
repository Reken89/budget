<?php

namespace App\Structure\DeloSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\DeloSection\User\Models\Document;

class DeloSelectTask extends BaseTask
{
    /**
     * Возвращает таблицу documents
     *
     * @param
     * @return
     */
    public function SelectAll()
    {
        $result = Document::select() 
            ->with([
                'user:id,name',
                'npa',
                'correspondent'
                ]) 
            ->get()
            ->toArray();
        return $result;
    }
}    
