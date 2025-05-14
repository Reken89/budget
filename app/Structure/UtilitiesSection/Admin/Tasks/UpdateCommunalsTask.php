<?php

namespace App\Structure\UtilitiesSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\UtilitiesSection\Admin\Dto\UpdateStatusDto;
use App\Structure\UtilitiesSection\Admin\Models\Communal;

class UpdateCommunalsTask extends BaseTask
{
    /**
     * Обновление тарифов
     *
     * @param UpdateStatusDto $dto
     * @return bool
     */
    public function UpdateStatus(UpdateStatusDto $dto): bool
    {        
        $result = Communal::find($dto->id)
        ->update([                  
            'status' => 2,
        ]);
        return $result == true ? true : false;
    }   
}

