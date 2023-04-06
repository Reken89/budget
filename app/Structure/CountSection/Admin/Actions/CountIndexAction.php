<?php

namespace App\Structure\CountSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\CountSection\Admin\Tasks\CountSelectAllTask;

class CountIndexAction extends BaseAction
{
    /**
     * Возвращает смету по заданным параметрам
     *
     * @param int $variant, int $year
     * @return array
     */
    public function run(int $variant, int $year): array
    {   
        if($variant == '1'){
            $result = [
            'glava' => $this->task(CountSelectAllTask::class)->run(35, $year),
            'adm'   => $this->task(CountSelectAllTask::class)->run(25, $year),
            'sovet' => $this->task(CountSelectAllTask::class)->run(27, $year),
            'kso'   => $this->task(CountSelectAllTask::class)->run(28, $year),
            ];
        
            $total = [
                'glava' => $this->task(CountSelectAllTask::class)->total(35, $year),
                'adm'   => $this->task(CountSelectAllTask::class)->total(25, $year),
                'sovet' => $this->task(CountSelectAllTask::class)->total(27, $year),
                'kso'   => $this->task(CountSelectAllTask::class)->total(28, $year),
            ];          
        } elseif($variant == '2'){
            
        }

        
        $info = [
            'result'  => $result,
            'year'    => $year,
            'total'   => $total,
            'variant' => $variant,
        ];
        
        return $info;

    }
}

