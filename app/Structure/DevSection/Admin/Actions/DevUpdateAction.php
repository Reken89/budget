<?php

namespace App\Structure\DevSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\CommunalSection\User\Models\Communal;

class DevUpdateAction extends BaseAction
{
    /**
     * Обновляет значения таблицы communals по id
     *
     * @param string $id
     * @return bool
     */
    public function status(string $id): bool
    {   
        $result = Communal::find($id)
            ->update([                
                 'status' => 3
            ]);
        
        return $result == true ? true : false;        
    }
}

