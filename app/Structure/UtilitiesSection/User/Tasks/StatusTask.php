<?php

namespace App\Structure\UtilitiesSection\User\Tasks;

use App\Core\Task\BaseTask;

class StatusTask extends BaseTask
{
    /**
     * Проверяем тариф
     *
     * @param float $volume, float $sum, float $min, float $max
     * @return bool
     */
    public function ExaminStatus(float $volume, float $sum, float $min, float $max): bool
    {        
        if($volume == 0 && $sum == 0){
            return true;
        }else{
            if($sum/$volume >= $min && $sum/$volume <= $max){
                return true;
            }else{
                return false;
            }
        }
    }
    
}
