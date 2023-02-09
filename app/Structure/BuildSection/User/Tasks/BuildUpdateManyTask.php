<?php

namespace App\Structure\BuildSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\BuildSection\Admin\Models\Repair;
use App\Structure\BuildSection\User\Dto\BuildUpdateDto;

class BuildUpdateManyTask extends BaseTask
{
    /**
     * Обновляет значения в таблицах repairs
     * Обновляет несколько месяцев
     *
     * @param BuildUpdateDto $dto
     * @return 
     */
    public function run(BuildUpdateDto $dto)
    {        
        if ($dto->mounth < 12){
            $mounth = [];
            $key = -1;
            for ($i = $dto->mounth ; $i < 13 ; $i++){
                $key += 1;
                $mounth[$key] = $i;
            }
        } else {
            $mounth = [$dto->mounth];
        }
        
        $result = Repair::where('work_id', $dto->work_id)
                ->whereIn('mounth', $mounth)
                ->where('year', $dto->year)
                ->where('user_id', $dto->user_id);
        $result->update([                
            'number'       => $dto->number,
            'period'       => $dto->period,
            'contract_sum' => $dto->contract_sum,
        ]);
        
        return $result;

    }
    
}