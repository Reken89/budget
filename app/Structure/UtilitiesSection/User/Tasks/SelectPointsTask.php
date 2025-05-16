<?php

namespace App\Structure\UtilitiesSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\UtilitiesSection\Admin\Models\Point;

class SelectPointsTask extends BaseTask
{
    /**
     * Возвращает максимальный рейтинг учреждения
     *
     * @param 
     * @return int
     */
    public function SelectMaxPoints(): int
    {        
        return Point::select()->max('points');  
            //->get()
            //->toArray();
    }
    
    /**
     * Возвращает максимальный рейтинг учреждения
     *
     * @param int $id
     * @return array
     */
    public function SelectPoints(int $id): array
    {        
        return Point::select()
            ->where('user_id', $id)    
            ->first()
            ->toArray();
    }
}
