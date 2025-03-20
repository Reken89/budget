<?php

namespace App\Structure\Forecast25Section\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\CommunalSection\User\Models\Communal;

class SelectCommunalTask extends BaseTask
{
    /**
     * Проверяем таблицу на наличие записей со статусом 2 и 3
     *
     * @param int $year, int $mounth
     * @return bool
     */
    public function ExaminStatus(int $year, int $mounth): bool
    {    
        return Communal::select()
            ->where('year', $year)
            ->where('mounth', $mounth)
            ->whereIn('status', [2, 3])          
            ->count() > 0;
    }
    
    /**
     * Возвращает информацию из таблицы communals
     * по заданным параметрам
     *
     * @param int $year, array $mounth, int $user
     * @return array
     */
    public function SelectInfo(int $year, array $mounth, int $user): array
    {    
        return Communal::selectRaw('SUM(`heat-volume`) as heat')
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
    }
}


