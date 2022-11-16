<?php

namespace App\Structure\CommunalSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\CommunalSection\User\Models\Tarrifs;

class TarrifsSelectTask extends BaseTask
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

