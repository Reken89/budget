<?php

namespace App\Structure\OfsSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\OfsSection\User\Dto\OfsUpdateDto;
use App\Structure\OfsSection\User\Tasks\OfsUpdateTask;
use App\Structure\OfsSection\User\Tasks\OfsSelectForMainTask;
use App\Structure\OfsSection\User\Tasks\OfsUpdateMainTask;
use App\Structure\OfsSection\User\Tasks\OfsSelectForSharedTask;
use App\Structure\OfsSection\User\Tasks\OfsUpdateSharedTask;

class OfsUpdateAction extends BaseAction
{
    /**
     * Обновляет значения в таблице ofs по id
     *
     * @param OfsUpdateDto $dto
     * @return array
     */
    public function run(OfsUpdateDto $dto)
    {   
        $this->task(OfsUpdateTask::class)->run($dto);
        $main = $this->task(OfsSelectForMainTask::class)->run($dto);
        $this->task(OfsUpdateMainTask::class)->run($dto->main_id, $main);
        
        if($dto->number >= 17 && $dto->number <=42){
            $shared = $this->task(OfsSelectForSharedTask::class)->run($dto);
            $this->task(OfsUpdateSharedTask::class)->run($dto->shared_id, $shared);
        }
        
        return true;
    }
}

