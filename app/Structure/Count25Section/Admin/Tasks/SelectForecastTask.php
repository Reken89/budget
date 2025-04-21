<?php

namespace App\Structure\Count25Section\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Forecast25Section\Admin\Models\Forecast;

class SelectForecastTask extends BaseTask
{
    /**
     * Возвращает прогноз по заданным параметрам
     * Таблица forecasts
     *
     * @param int $user
     * @return array
     */
    public function SelectCommunal(int $user): array
    {              
        return Forecast::selectRaw('(`sum_one` + `sum_two`) as sum_fu')
            ->where('user_id', $user)       
            ->get()
            ->toArray();
    }

}

