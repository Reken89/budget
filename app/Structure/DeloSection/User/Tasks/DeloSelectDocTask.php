<?php

namespace App\Structure\DeloSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\DeloSection\User\Models\Document;

class DeloSelectDocTask extends BaseTask
{
    /**
     * Выбираем один документ из таблицы documents
     *
     * @param int $id
     * @return
     */
    public function SelectDoc(int $id)
    {
        $result = Document::select()      
            ->with([
                'user:id,name',
                'npa',
                'correspondent'
                ]) 
            ->where('id', $id)  
            ->first()
            ->toArray();
        return $result;
    }
}    
