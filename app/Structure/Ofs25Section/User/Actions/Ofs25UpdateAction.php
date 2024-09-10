<?php

namespace App\Structure\Ofs25Section\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Ofs25Section\User\Dto\Ofs25UpdateDto;
use App\Structure\Ofs25Section\User\Tasks\Ofs25UpdateTask;
use App\Structure\Ofs25Section\User\Tasks\Ofs25UpdateMainTask;
use App\Structure\Ofs25Section\User\Tasks\Ofs25UpdateSharedTask;

class Ofs25UpdateAction extends BaseAction
{
    /**
     * Обновляет значения в таблице ofs
     *
     * @param Ofs25UpdateDto $dto
     * @return array
     */
    public function UpdateInfo(Ofs25UpdateDto $dto)
    {   
        $this->task(Ofs25UpdateTask::class)->UpdateFact($dto);
        $this->task(Ofs25UpdateTask::class)->UpdateKassa($dto);
        $this->task(Ofs25UpdateTask::class)->UpdateInfo($dto);
        
        $main = $this->task(Ofs25UpdateMainTask::class)->SelectMain($dto);        
        $this->task(Ofs25UpdateMainTask::class)->UpdateMain($dto->user_id, $dto->mounth, $dto->chapter, $dto->number, $main);
        
        if($dto->number >= 17 && $dto->number <=42 || $dto->number == 45){
            $shared = $this->task(Ofs25UpdateSharedTask::class)->SelectShared($dto);
            $this->task(Ofs25UpdateSharedTask::class)->UpdateShared($dto->user_id, $dto->mounth, $dto->chapter, $dto->number, $shared);
        }

    }
}

