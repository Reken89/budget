<?php

namespace App\Structure\BuildSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\BuildSection\Admin\Tasks\BuildSelectAllTask;

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
        
        $info = $this->task(BuildSelectAllTask::class)->run($year, $mounth, $user);
        
        return $info;

    }
}

