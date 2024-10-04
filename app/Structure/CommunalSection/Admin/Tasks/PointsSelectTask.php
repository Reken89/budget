<?php

namespace App\Structure\CommunalSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\CommunalSection\User\Models\Point;

class PointsSelectTask extends BaseTask
{
    /**
     * Возвращает рейтинг учреждений
     *
     * @param 
     * @return array
     */
    public function SelectAll(): array
    {        
        $info = Point::select()    
            ->get()
            ->toArray();
        
        return $info;  

    }
}
