<?php

namespace App\Structure\Forecast25Section\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\CommunalSection\User\Models\Communal;

class SelectCommunalTask extends BaseTask
{
    /**
     * Проверяем таблицу на наличие записей со статусом 2 и 3
     *
     * @param int $year, int $mounth
     * @return bool
     */
    public function ExaminStatus(int $year, int $mounth): bool
    {    
        return Communal::select()
            ->where('year', $year)
            ->where('mounth', $mounth)
            ->whereIn('status', [2, 3])          
            ->count() > 0;
    }
}


