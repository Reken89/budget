<?php

namespace App\Structure\Count24Section\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Count24Section\Admin\Tasks\Count24SelectTask;

class Count24SelectAction extends BaseAction
{
    /**
     * Возвращает смету по заданным параметрам
     *
     * @param int $variant, int $year
     * @return array
     */
    public function SelectInfo(int $variant, int $year): array
    {      
        if($variant == "5"){
            $users = [18,19];
        }
        
        $result = $this->task(Count24SelectTask::class)->SelectAll($users, $year);
        return $result;

    }
}

