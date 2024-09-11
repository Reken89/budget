<?php

namespace App\Structure\Ofs25Section\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Ofs25Section\User\Dto\Ofs25ResetDto;
use App\Structure\Ofs25Section\User\Tasks\Ofs25ResetTask;
use App\Structure\Ofs25Section\User\Tasks\Ofs25UpdateMainTask;
use App\Structure\Ofs25Section\User\Tasks\Ofs25UpdateSharedTask;

class Ofs25ResetAction extends BaseAction
{
    /**
     * Сбрасывает значения в таблице ofs
     *
     * @param Ofs25ResetDto $dto
     * @return array
     */
    public function ResetInfo(Ofs25ResetDto $dto)
    {   
        if ($dto->mounth == '1'){
            $value = ['fact_all' => 0, 'kassa_all' => 0];
        } else {
            $value = $this->task(Ofs25ResetTask::class)->SelectInfo($dto);
        }
        
        $this->task(Ofs25ResetTask::class)->ResetInfo($dto, $value);
        
        $main = $this->task(Ofs25UpdateMainTask::class)->SelectMain($dto->user_id, $dto->mounth, $dto->chapter, $dto->number);        
        $this->task(Ofs25UpdateMainTask::class)->UpdateMain($dto->user_id, $dto->mounth, $dto->chapter, $dto->number, $main);
        
        if($dto->number >= 17 && $dto->number <=42 || $dto->number == 45){
            $shared = $this->task(Ofs25UpdateSharedTask::class)->SelectShared($dto->user_id, $dto->mounth, $dto->chapter, $dto->number);
            $this->task(Ofs25UpdateSharedTask::class)->UpdateShared($dto->user_id, $dto->mounth, $dto->chapter, $dto->number, $shared);
        }
        
        return true;
        
    }
}

