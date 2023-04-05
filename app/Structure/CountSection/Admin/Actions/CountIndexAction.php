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
        $result = [
            'glava' => $this->task(CountSelectAllTask::class)->run(35, $year),
            'adm'   => $this->task(CountSelectAllTask::class)->run(25, $year),
            'sovet' => $this->task(CountSelectAllTask::class)->run(27, $year),
            'kso'   => $this->task(CountSelectAllTask::class)->run(28, $year),
        ];
        
        $info = [
            'result' => $result,
            'year'   => $year,
        ];
        
        return $info;

    }
}

