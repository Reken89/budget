<?php

namespace App\Structure\UtilitiesSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\UtilitiesSection\Admin\Models\Communal;
use App\Structure\UtilitiesSection\User\Dto\IndexDto;

class SelectCommunalsTask extends BaseTask
{
    /**
     * Проверяем таблицу на наличие записей со статусом 2 и 3
     *
     * @param int $year, int $mounth, int $id
     * @return bool
     */
    public function ExaminStatus(int $year, int $mounth, int $id): bool
    {        
        return Communal::select()
            ->where('year', $year)
            ->where('mounth', $mounth)
            ->where('user_id', $id)
            ->whereIn('status', [2, 3])          
            ->count() > 0;
    }
    
    /**
     * Возвращаем информацию для таблицы communals
     *
     * @param IndexDto $dto, int $id
     * @return array
     */
    public function SelectTable(IndexDto $dto, int $id): array
    {     
        return Communal::select()
            ->selectRaw("(`heat-sum` + `drainage-sum` + `negative-sum` +"
                    . "`water-sum` + `power-sum` + `trash-sum`) AS total")    
            ->with(['user:id,name'])    
            ->where('year', $dto->year[0])
            ->where('mounth', $dto->mounth[0]) 
            ->where('user_id', $id)     
            ->first()
            ->toArray();       
    }
    
}
