<?php

namespace App\Structure\DevSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\CommunalSection\User\Models\Tarrifs;

class DevSelectTarrifTask extends BaseTask
{
    /**
     * Возвращает тарифы за выбранный год
     *
     * @param int $year
     * @return array
     */
    public function run(int $year): array
    {
        
        $info = Tarrifs::select()
            ->where('year', $year)
            ->get() 
            ->toArray();
        return $info;  

    }
}

