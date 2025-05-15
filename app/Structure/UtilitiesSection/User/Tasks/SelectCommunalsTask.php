<?php

namespace App\Structure\UtilitiesSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\UtilitiesSection\Admin\Models\Communal;

class SelectCommunalsTask extends BaseTask
{
    /**
     * Проверяем таблицу на наличие записей со статусом 2 и 3
     *
     * @param int $year, int $mounth, int $id
     * @return bool
     */
    public function ExaminStatus(int $year, int $mounth, int $id): bool
    {        
        return Communal::select()
            ->where('year', $year)
            ->where('mounth', $mounth)
            ->where('user_id', $id)
            ->whereIn('status', [2, 3])          
            ->count() > 0;
    }
    
}
