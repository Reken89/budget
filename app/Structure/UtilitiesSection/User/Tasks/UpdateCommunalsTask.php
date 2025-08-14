<?php

namespace App\Structure\UtilitiesSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\UtilitiesSection\Admin\Models\Communal;
use App\Structure\UtilitiesSection\User\Dto\UpdateDto;

class UpdateCommunalsTask extends BaseTask
{
    /**
     * Обновляем значения в таблице communals
     *
     * @param UpdateDto $dto
     * @return bool
     */
    public function UpdateCommunals(UpdateDto $dto): bool
    {        
        $result = Communal::find($dto->id)
            ->update([                
                "$dto->service-volume" => $dto->volume,
                "$dto->service-sum"    => $dto->sum
            ]);
        return $result == true ? true : false;
    }
    
    /**
     * Обновляем статус строки
     *
     * @param int $id, int $status
     * @return bool
     */
    public function UpdateStatus(int $id, int $status): bool
    {        
        $result = Communal::find($id)
            ->update([                
                "status" => $status,
            ]);
        return $result == true ? true : false;
    }
    
    /**
     * Персональное обновление
     * "Негативные воздействия"
     *
     * @param UpdateDto $dto
     * @return bool
     */
    public function UpdateNegative(UpdateDto $dto): bool
    {        
        $result = Communal::find($dto->id)
            ->update([                
                "negative-volume" => $dto->volume*0.5,
                "negative-sum"    => $dto->sum*0.5
            ]);
        return $result == true ? true : false;
    }
    
}

