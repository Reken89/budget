<?php

namespace App\Structure\CommunalSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\CommunalSection\User\Models\Communal;

class CommunalUpdateStatusAction extends BaseAction
{
    /**
     * Обновляет статус в таблице communal по id
     *
     * @param int $id
     * @return 
     */
    public function run(int $id)
    {
            Communal::find($id)
            ->update([                  
                'status' => 2,
            ]);
    }
}

