<?php

namespace App\Structure\Ofs2024Section\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Ofs2024Section\User\Dto\Ofs2024UpdateDto;
use App\Structure\Ofs2024Section\User\Tasks\Ofs2024UpdateTask;
use App\Structure\Ofs2024Section\User\Tasks\Ofs2024UpdateMainTask;
use App\Structure\Ofs2024Section\User\Tasks\Ofs2024UpdateSharedTask;

class Ofs2024UpdateAction extends BaseAction
{
    /**
     * Обновляет значения в таблице ofs
     *
     * @param Ofs2024UpdateDto $dto
     * @return array
     */
    public function UpdateInfo(Ofs2024UpdateDto $dto)
    {   
        $this->task(Ofs2024UpdateTask::class)->UpdateFact($dto);
        $this->task(Ofs2024UpdateTask::class)->UpdateKassa($dto);
        $this->task(Ofs2024UpdateTask::class)->UpdateInfo($dto);
        
        $main = $this->task(Ofs2024UpdateMainTask::class)->SelectMain($dto->user_id, $dto->mounth, $dto->chapter, $dto->number);        
        $this->task(Ofs2024UpdateMainTask::class)->UpdateMain($dto->user_id, $dto->mounth, $dto->chapter, $dto->number, $main);
        
        if($dto->number >= 17 && $dto->number <=42 || $dto->number == 45){
            $shared = $this->task(Ofs2024UpdateSharedTask::class)->SelectShared($dto->user_id, $dto->mounth, $dto->chapter, $dto->number);
            $this->task(Ofs2024UpdateSharedTask::class)->UpdateShared($dto->user_id, $dto->mounth, $dto->chapter, $dto->number, $shared);
        }

    }
}

