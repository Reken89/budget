<?php

namespace App\Structure\CountSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\ForecastSection\Admin\Models\Forecastcommunal;

class CountSelectCommunalTask extends BaseTask
{
    /**
     * Возвращает прогноз по заданным параметрам
     *
     * @param $user
     * @return array
     */
    public function run(int $user): array
    {       
        
        $info = Forecastcommunal::selectRaw('(`sum_one` + `sum_two`) as sum_fu')
            ->where('user_id', $user)       
            ->get()
            ->toArray();
        
        return $info;  

    }
}
