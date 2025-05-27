<?php

namespace App\Structure\UtilitiesSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\UtilitiesSection\Admin\Models\Point;

class UpdatePointsTask extends BaseTask
{
    /**
     * Прибавляем очки в таблице
     *
     * @param int $id
     * @return bool
     */
    public function AddPoints(int $id): bool
    {        
        $result = Point::where('user_id', $id)   
            ->update([
                'points' => Point::raw("points + 10"),
                'mounth' => date("m"),
            ]);            
        return $result == true ? true : false;       
    }
}

