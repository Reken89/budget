<?php

namespace App\Structure\BuildSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\BuildSection\Admin\Tasks\BuildSelectAllTask;
use App\Structure\BuildSection\Admin\Tasks\BuildCalculatorEkrTask;

class BuildIndexAction extends BaseAction
{
    /**
     * Возвращает таблицу repairs по заданным параметрам
     * 
     * @param array $year, array $mounth, int $variant
     * @return 
     */
    public function run(int $year, array $mounth, int $variant)
    {   
        if ($variant == '5'){
            $user = [18, 19];
        }
        
        if (count($mounth) == '1'){
            $info = $this->task(BuildSelectAllTask::class)->one($year, $mounth, $user);
            $many = "no";
        } else {
            $info = $this->task(BuildSelectAllTask::class)->run($year, $mounth, $user);
            $many = "yes";
        }
        $ekr = $this->task(BuildCalculatorEkrTask::class)->run($info, $variant);
        
        $result = [
            'info'        => $info,
            'variant'     => $variant,
            'ekr'         => $ekr,
            'many_mounth' => $many,
        ];
        
        return $result;

    }
}

