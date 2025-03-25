<?php

namespace App\Structure\Forecast25Section\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Forecast25Section\Admin\Tasks\SelectCommunalTask;

class DetailingAction extends BaseAction
{
    /**
     * Получаем массив со статусами
     * Выбираем по году и месяцу
     *
     * @param 
     * @return
     */
    public function DetailingStatus(int $year, int $mounth)
    {   
        return $this->task(SelectCommunalTask::class)->SelectStatus($year, $mounth);
    }
}

