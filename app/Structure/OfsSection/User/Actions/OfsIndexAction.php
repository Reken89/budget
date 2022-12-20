<?php

namespace App\Structure\OfsSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\OfsSection\User\Tasks\OfsSelectAllTask;
use App\Structure\OfsSection\User\Tasks\OfsNumberMaxTask;
use App\Structure\OfsSection\User\Tasks\OfsSelectTotalTask;

class OfsIndexAction extends BaseAction
{
    /**
     * Возвращает ОФС по заданным параметрам
     * Возвращает ИТОГИ ОФС
     *
     * @param int $user, int $year, int $mounth, int $chapter
     * @return array
     */
    public function run(int $user, int $year, int $mounth, int $chapter): array
    {   
        $result = $this->task(OfsSelectAllTask::class)->run($user, $year, $mounth, $chapter);
        $total = $this->task(OfsSelectTotalTask::class)->run($user, $year, $mounth, $chapter);
        $number = $this->task(OfsNumberMaxTask::class)->run();
  
        $info = [
            'info'   => 'yes',
            'result' => $result,
            'number' => $number,
            'total'  => $total,
        ];
        
        return $info;

    }
}

