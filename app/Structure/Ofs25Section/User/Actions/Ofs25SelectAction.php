<?php

namespace App\Structure\Ofs25Section\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Ofs25Section\User\Dto\Ofs25SelectDto;
use App\Structure\Ofs25Section\User\Tasks\Ofs25SelectOfsTask;

class Ofs25SelectAction extends BaseAction
{
    /**
     * Возвращает ОФС по заданным параметрам
     *
     * @param Ofs25SelectDto $dto
     * @return 
     */
    public function SelectInfo(Ofs25SelectDto $dto): array
    {   
        if(count($dto->chapter) < 2){
            $result = $this->task(Ofs25SelectOfsTask::class)->SelectOfs($dto->chapter[0], $dto->mounth, $dto->user);
        }
        
        return $result;

    }
}
