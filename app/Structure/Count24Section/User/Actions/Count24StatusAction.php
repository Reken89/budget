<?php

namespace App\Structure\Count24Section\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Count24Section\User\Dto\Count24IndexDto;
use App\Structure\Count24Section\User\Tasks\Count24UpdateTask;

class Count24StatusAction extends BaseAction
{
    /**
     * Обновляем статус в строках таблицы count24
     *
     * @param Count24IndexDto $dto
     * @return
     */
    public function UpdateStatus(Count24IndexDto $dto)
    {   
        if($dto->variant == "1"){
            $users = [53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68];
        }
        
        if($dto->variant == "2"){
            $users = [27, 28, 35];
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
        
        if($dto->variant == "8"){
            $result = false;
        }else{
            $result = $this->task(Count24UpdateTask::class)->UpdateStatus($users, $dto->year);
        }
        
        return $result;    
    }
}
