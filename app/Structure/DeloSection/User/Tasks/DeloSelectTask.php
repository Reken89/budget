<?php

namespace App\Structure\DeloSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\DeloSection\User\Models\Document;

class DeloSelectTask extends BaseTask
{
    /**
     * Возвращает таблицу documents
     *
     * @param string $variant
     * @return
     */
    public function SelectAll(string $variant)
    {
        $result = Document::select()      
            ->with([
                'user:id,name',
                'npa',
                'correspondent'
                ]) 
            ->where('type', $variant)  
            ->limit(100)
            ->orderBy('id', 'desc')
            ->get()
            ->toArray();
        return $result;
    }
}    
