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
    public function run(int $user, int $year, int $mounth, array $chapter): array
    {   
        if(count($chapter) == '1'){
            $result = $this->task(OfsSelectAllTask::class)->run($user, $year, $mounth, $chapter);
            $variant = "one";
        } else {
            $result = $this->task(OfsSelectAllTask::class)->many($user, $year, $mounth, $chapter);
            $variant = "many";
        }
        $total = $this->task(OfsSelectTotalTask::class)->run($user, $year, $mounth, $chapter);
        $number = $this->task(OfsNumberMaxTask::class)->run();
  
        $info = [
            'info'    => 'yes',
            'result'  => $result,
            'number'  => $number,
            'total'   => $total,
            'variant' => $variant,
            'chapter' => $chapter,
            'mounth'  => $mounth,
        ];
        
        return $info;

    }
}

