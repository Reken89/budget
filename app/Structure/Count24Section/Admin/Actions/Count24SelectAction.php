<?php

namespace App\Structure\Count24Section\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Count24Section\Admin\Dto\Count24IndexDto;
use App\Structure\Count24Section\Admin\Tasks\Count24SelectTask;

class Count24SelectAction extends BaseAction
{
    /**
     * Возвращает смету по заданным параметрам
     *
     * @param Count24IndexDto $dto
     * @return array
     */
    public function SelectInfo(Count24IndexDto $dto): array
    {   
        if($dto->variant == "1"){
            $users = [53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68,];
        }
        
        if($dto->variant == "2"){
            $users = [27, 28, 35, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68,];
        }
        
        if($dto->variant == "3"){
            $users = [26,29];
        }
        if($dto->variant == "4"){
            $users = [9,10,11,12,13,14,15];
        }
        if($dto->variant == "5"){
            $users = [18,19];
        }
        if($dto->variant == "6"){
            $users = [8,36];
        }
        if($dto->variant == "7"){
            $users = [23,37,38];
        }
        
        $result = $this->task(Count24SelectTask::class)->SelectAll($users, $dto->year);
        return $result;

    }
}

