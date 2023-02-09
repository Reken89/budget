<?php

namespace App\Structure\BuildSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\BuildSection\User\Dto\BuildUpdateDto;
use App\Structure\BuildSection\User\Tasks\BuildUpdateManyTask;
use App\Structure\BuildSection\User\Tasks\BuildUpdateOneTask;

class BuildUpdateAction extends BaseAction
{
    /**
     * Обновляет значения в таблицах repairs
     * 
     * @param BuildUpdateDto $dto
     * @return bool
     */
    public function run(BuildUpdateDto $dto)
    {     
        $this->task(BuildUpdateManyTask::class)->run($dto);
        $this->task(BuildUpdateOneTask::class)->run($dto);
        
        return true;
 
    }
}
