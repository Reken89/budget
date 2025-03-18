<?php

namespace App\Structure\Forecast25Section\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Forecast25Section\Admin\Tasks\SelectCommunalTask;

class ExaminCommunalAction extends BaseAction
{
    /**
     * Проверка таблицы communals
     * На наличие ошибок
     *
     * @param int $year
     * @return
     */
    public function ExaminCommunal(int $year)
    {   
        $result = [];
        for($m = 1; $m < 13; $m++){
            $result[$m] = $this->task(SelectCommunalTask::class)->ExaminStatus($year, $m);
        }
        return $result;
    }
}

