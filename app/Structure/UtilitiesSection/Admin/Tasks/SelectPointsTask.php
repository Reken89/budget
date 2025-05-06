<?php

namespace App\Structure\UtilitiesSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\UtilitiesSection\Admin\Models\Point;

class SelectPointsTask extends BaseTask
{
    /**
     * Возвращает рейтинг учреждений
     *
     * @param 
     * @return array
     */
    public function SelectPoints(): array
    {        
        return Point::select()    
            ->get()
            ->toArray();
    }
}

