<?php

namespace App\Structure\OfsSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\OfsSection\User\Models\Ofs;

class OfsResetTask extends BaseTask
{
    /**
     * Обновляет значения полей fact, kassa в таблице Ofs
     *
     * @param int $id, array $value
     * @return bool
     */
    public function run(int $id, array $value): bool
    {        
        $result = Ofs::find($id)
            ->update([                
                'fact_all'         => $value['fact_all'],
                'fact_mounth'      => 0,
                'kassa_all'        => $value['kassa_all'],
                'kassa_mounth'     => 0,
            ]);        
        
        return $result == true ? true : false;

    }
}

