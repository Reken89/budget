<?php

namespace App\Structure\ForecastSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\CommunalSection\User\Models\Communal;

class ForecasSelectTask extends BaseTask
{
    /**
     * Получаем значения из таблицы коммунальные услуги
     *
     * @param int $year, array $mounth, int $user
     * @return array
     */
    public function run(int $year, array $mounth, int $user): array
    {        
        $info = Communal::selectRaw('SUM(`heat-volume`) as heat')
            ->selectRaw('SUM(`drainage-volume`) as drainage')
            ->selectRaw('SUM(`negative-volume`) as negative') 
            ->selectRaw('SUM(`water-volume`) as water')
            ->selectRaw('SUM(`power-volume`) as energy') 
            ->selectRaw('SUM(`trash-volume`) as trash')   
            ->where('year', $year)
            ->where('user_id', $user)
            ->whereIn('mounth', $mounth)
            ->first()
            ->toArray();
        
        return $info; 

    }   
   
}

