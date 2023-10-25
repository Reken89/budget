<?php

namespace App\Structure\Ofs24Section\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Ofs24Section\User\Dto\Ofs24ResetDto;
use App\Structure\Ofs24Section\User\Tasks\Ofs24ResetTask;
use App\Structure\Ofs24Section\User\Tasks\Ofs24UpdateMainTask;
use App\Structure\Ofs24Section\User\Tasks\Ofs24UpdateSharedTask;

class Ofs24ResetAction extends BaseAction
{
    /**
     * Сбрасывает значения в таблице ofs
     *
     * @param Ofs24ResetDto $dto
     * @return array
     */
    public function run(Ofs24ResetDto $dto)
    {   
        if ($dto->mounth == '1'){
            $value = ['fact_all' => 0, 'kassa_all' => 0];
        } else {
            $value = $this->task(Ofs24ResetTask::class)->selectvalue($dto);
        }
        
        $this->task(Ofs24ResetTask::class)->reset($dto, $value);
        
        $main = $this->task(Ofs24UpdateMainTask::class)->select($dto->user_id, $dto->mounth, $dto->chapter, $dto->number);
        $this->task(Ofs24UpdateMainTask::class)->update($dto->user_id, $dto->mounth, $dto->chapter, $dto->number, $main);
        
        if($dto->number >= 17 && $dto->number <=42){
            $shared = $this->task(Ofs24UpdateSharedTask::class)->select($dto->user_id, $dto->mounth, $dto->chapter, $dto->number);
            $this->task(Ofs24UpdateSharedTask::class)->update($dto->user_id, $dto->mounth, $dto->chapter, $dto->number, $shared);
        }
        
        return true;
        
    }
}
