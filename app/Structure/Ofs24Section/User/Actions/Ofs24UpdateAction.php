<?php

namespace App\Structure\Ofs24Section\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Ofs24Section\User\Dto\Ofs24UpdateDto;
use App\Structure\Ofs24Section\User\Tasks\Ofs24UpdateTask;
use App\Structure\Ofs24Section\User\Tasks\Ofs24UpdateMainTask;
use App\Structure\Ofs24Section\User\Tasks\Ofs24UpdateSharedTask;

class Ofs24UpdateAction extends BaseAction
{
    /**
     * Обновляет значения в таблице ofs по id
     *
     * @param Ofs24UpdateDto $dto
     * @return array
     */
    public function run(Ofs24UpdateDto $dto)
    {   
        $this->task(Ofs24UpdateTask::class)->fact($dto);
        $this->task(Ofs24UpdateTask::class)->kassa($dto);
        $this->task(Ofs24UpdateTask::class)->run($dto);
        
        $main = $this->task(Ofs24UpdateMainTask::class)->select($dto->user_id, $dto->mounth, $dto->chapter, $dto->number);        
        $this->task(Ofs24UpdateMainTask::class)->update($dto->user_id, $dto->mounth, $dto->chapter, $dto->number, $main);
        
        if($dto->number >= 17 && $dto->number <=42){
            $shared = $this->task(Ofs24UpdateSharedTask::class)->select($dto->user_id, $dto->mounth, $dto->chapter, $dto->number);
            $this->task(Ofs24UpdateSharedTask::class)->update($dto->user_id, $dto->mounth, $dto->chapter, $dto->number, $shared);
        }
        
        return true;
    }
}
