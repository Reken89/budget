<?php

namespace App\Structure\CommunalSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\CommunalSection\User\Models\Communal;

class CommunalChangeAction extends BaseAction
{
    /**
     * Обновляет значения таблицы communals по id
     *
     * @param int $id
     * @return bool
     */
    public function run(int $id): bool
    {   
        $result = Communal::find($id)
            ->update([                
                 'status' => 3
            ]);
        
        return $result == true ? true : false;        
    }
}

