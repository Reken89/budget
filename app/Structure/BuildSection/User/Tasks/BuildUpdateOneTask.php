<?php

namespace App\Structure\BuildSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\BuildSection\Admin\Models\Repair;
use App\Structure\BuildSection\User\Dto\BuildUpdateDto;

class BuildUpdateOneTask extends BaseTask
{
    /**
     * Обновляет значения в таблицах repairs
     * Обновляет один месяц
     *
     * @param BuildUpdateDto $dto
     * @return 
     */
    public function run(BuildUpdateDto $dto)
    {  
        $result = Repair::find($dto->id);
        $result->update([                
            'kassa_sum' => $dto->kassa_sum,
            'fact_sum'  => $dto->fact_sum,
        ]);
        
        return $result;
        
    }
    
}

