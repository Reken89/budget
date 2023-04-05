<?php

namespace App\Structure\CountSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\CountSection\Admin\Models\Count;

class CountSelectAllTask extends BaseTask
{
    /**
     * Возвращает смету по заданным параметрам
     *
     * @param int $user, int $year
     * @return array
     */
    public function run(int $user, int $year): array
    {       
        
        $info = Count::select()
            ->with(['user:id,name', 'ekr'])
            ->where('user_id', $user)    
            ->where('year', $year)    
            ->get()
            ->toArray();
        
        return $info;  

    }
}
