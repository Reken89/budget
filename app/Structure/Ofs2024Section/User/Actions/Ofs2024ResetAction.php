<?php

namespace App\Structure\Ofs2024Section\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Ofs2024Section\User\Dto\Ofs2024ResetDto;
use App\Structure\Ofs2024Section\User\Tasks\Ofs2024ResetTask;
use App\Structure\Ofs2024Section\User\Tasks\Ofs2024UpdateMainTask;
use App\Structure\Ofs2024Section\User\Tasks\Ofs2024UpdateSharedTask;

class Ofs2024ResetAction extends BaseAction
{
    /**
     * Сбрасывает значения в таблице ofs
     *
     * @param Ofs25ResetDto $dto
     * @return array
     */
    public function ResetInfo(Ofs2024ResetDto $dto)
    {   
        if ($dto->mounth == '1'){
            $value = ['fact_all' => 0, 'kassa_all' => 0];
        } else {
            $value = $this->task(Ofs2024ResetTask::class)->SelectInfo($dto);
        }
        
        $this->task(Ofs2024ResetTask::class)->ResetInfo($dto, $value);
        
        $main = $this->task(Ofs2024UpdateMainTask::class)->SelectMain($dto->user_id, $dto->mounth, $dto->chapter, $dto->number);        
        $this->task(Ofs2024UpdateMainTask::class)->UpdateMain($dto->user_id, $dto->mounth, $dto->chapter, $dto->number, $main);
        
        if($dto->number >= 17 && $dto->number <=42 || $dto->number == 45){
            $shared = $this->task(Ofs2024UpdateSharedTask::class)->SelectShared($dto->user_id, $dto->mounth, $dto->chapter, $dto->number);
            $this->task(Ofs2024UpdateSharedTask::class)->UpdateShared($dto->user_id, $dto->mounth, $dto->chapter, $dto->number, $shared);
        }
        
        return true;
        
    }
}


