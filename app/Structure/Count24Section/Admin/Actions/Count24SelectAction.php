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
        if($dto->variant == "5"){
            $users = [18,19];
        }
        if($dto->variant == "6"){
            $users = [8,36];
        }
        
        $result = $this->task(Count24SelectTask::class)->SelectAll($users, $dto->year);
        return $result;

    }
}

