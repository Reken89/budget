<?php

namespace App\Structure\CountSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\CountSection\Admin\Models\Count;

class CountMainUpdateTask extends BaseTask
{
    /**
     * Обновляет значения в таблице смета по id
     *
     * @param int $id, array $main
     * @return bool
     */
    public function run(int $id, array $main): bool
    {        
        $result = Count::find($id)
            ->update([                
                'sum_fu' => $main['sum_fu'],
                'sum_cb' => $main['sum_cb'],
            ]);
        
        return $result == true ? true : false;

    }
}

