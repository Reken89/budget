<?php

namespace App\Structure\CountSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\CountSection\User\Dto\CountUpdateDto;
use App\Structure\CountSection\User\Tasks\CountUpdateTask;
use App\Structure\CountSection\User\Tasks\CountSelectForMainTask;
use App\Structure\CountSection\User\Tasks\CountMainUpdateTask;
use App\Structure\CountSection\User\Tasks\CountSelectForSharedTask;

class CountUpdateAction extends BaseAction
{
    /**
     * Обновляем значение в таблице смета по id
     *
     * @param CountUpdateDto $dto
     * @return bool
     */
    public function run(CountUpdateDto $dto)
    {   
        $this->task(CountUpdateTask::class)->run($dto);
        
        $main = $this->task(CountSelectForMainTask::class)->run($dto);
        $this->task(CountMainUpdateTask::class)->run($dto->main_id, $main);
        
        if($dto->number >= 17 && $dto->number <=42){
            $shared = $this->task(CountSelectForSharedTask::class)->run($dto);
            $this->task(CountMainUpdateTask::class)->run($dto->shared_id, $shared);
        }
        
        if($dto->number == 45){
            $shared = $this->task(CountSelectForSharedTask::class)->run($dto);
            $this->task(CountMainUpdateTask::class)->run($dto->shared_id, $shared);
        }
        
    }
}

