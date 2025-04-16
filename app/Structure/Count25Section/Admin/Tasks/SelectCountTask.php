<?php

namespace App\Structure\Count25Section\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Count25Section\Admin\Models\Count25;

class SelectCountTask extends BaseTask
{
    /**
     * Проверяем таблицу на наличие записей со статусом 2
     *
     * @param int $year, array $user
     * @return bool
     */
    public function ExaminStatus(int $year, array $user): bool
    {    
        return Count25::select()
            ->where('year', $year)
            ->whereIn('user_id', $user)
            ->where('status', 2)          
            ->count() > 0;
    }
    
}