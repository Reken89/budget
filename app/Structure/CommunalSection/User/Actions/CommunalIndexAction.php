<?php

namespace App\Structure\CommunalSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\CommunalSection\User\Tasks\CommunalSelectAllTask;
use App\Structure\CommunalSection\User\Tasks\CommunalSelectTotalTask;

class CommunalIndexAction extends BaseAction
{
    /**
     * Возвращает коммунальные услуги за выбранный год
     * Возвращает ИТОГИ коммунальных услуг за выбранный год
     *
     * @param int $year
     * @return array
     */
    public function run(int $year): array
    {   
        $result = $this->task(CommunalSelectAllTask::class)->run($year);
        $total = $this->task(CommunalSelectTotalTask::class)->run($year);
        
        $info = [
            "result" => $result,
            "total"  => $total  
        ];
        
        return $info;

    }
}



