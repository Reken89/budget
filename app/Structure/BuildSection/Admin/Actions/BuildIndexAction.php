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
        if ($variant == '2'){

        } elseif ($variant == '3'){
            
        } elseif ($variant == '4'){
            $user = [25, 23];
        } elseif ($variant == '5'){
            $user = [18, 19];
        } elseif ($variant == '6'){
            
        }
        
        if (count($mounth) == '1'){
            $info = $this->task(BuildSelectAllTask::class)->one($year, $mounth, $user);
            $many = "no";
            $mounth_double = $mounth[0];
        } else {
            $info = $this->task(BuildSelectAllTask::class)->run($year, $mounth, $user);
            $many = "yes";
            $mounth_double = "no";
        }
        $ekr = $this->task(BuildCalculatorEkrTask::class)->run($info, $variant);
        
        $result = [
            'info'          => $info,
            'variant'       => $variant,
            'ekr'           => $ekr,
            'many_mounth'   => $many,
            'mounth_double' => $mounth_double,
        ];
        
        return $result;

    }
}

