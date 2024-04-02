<?php

namespace App\Structure\DeloSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\DeloSection\User\Models\Correspondent;

class DeloDeleteAction extends BaseAction
{
    /**
     * Добавляем строку в таблицу correspondents
     *
     * @param string $id
     * @return bool
     */
    public function DeleteCorr(int $id): bool
    {   
        $delete = Correspondent::where('id', $id)
            ->delete();  
        
        return $delete == true ? true : false;
    }
}

