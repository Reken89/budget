<?php

namespace App\Structure\OfsSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\OfsSection\User\Dto\OfsResetDto;
use App\Structure\OfsSection\User\Tasks\OfsSelectFormerTask;
use App\Structure\OfsSection\User\Tasks\OfsResetTask;
use App\Structure\OfsSection\User\Tasks\OfsSelectForMainTask;
use App\Structure\OfsSection\User\Tasks\OfsUpdateMainTask;
use App\Structure\OfsSection\User\Tasks\OfsSelectForSharedTask;
use App\Structure\OfsSection\User\Tasks\OfsUpdateSharedTask;

class OfsResetAction extends BaseAction
{
    /**
     * Сбрасывает значения в таблице ofs
     *
     * @param OfsResetDto $dto
     * @return array
     */
    public function run(OfsResetDto $dto)
    {   
        if ($dto->mounth == '1'){
            $value = ['fact_all' => 0, 'kassa_all' => 0];
        } else {
            $value = $this->task(OfsSelectFormerTask::class)->run($dto);
        }
        
        $this->task(OfsResetTask::class)->run($dto->id, $value);
        $main = $this->task(OfsSelectForMainTask::class)->run($dto->user_id, $dto->year, $dto->mounth, $dto->chapter, $dto->number);
        $this->task(OfsUpdateMainTask::class)->run($dto->main_id, $main);
        
        if($dto->number >= 17 && $dto->number <=42){
            $shared = $this->task(OfsSelectForSharedTask::class)->run($dto->user_id, $dto->year, $dto->mounth, $dto->chapter, $dto->number);
            $this->task(OfsUpdateSharedTask::class)->run($dto->shared_id, $shared);
        }
        
        return true;
        
    }
}

