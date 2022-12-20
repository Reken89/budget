<?php

namespace App\Structure\OfsSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\OfsSection\User\Dto\OfsUpdateDto;
use App\Structure\OfsSection\User\Models\Ofs;

class OfsIncrementTask extends BaseTask
{
    /**
     * Прибавляет значения в таблице Ofs
     *
     * @param OfsIndexDto $dto
     * @return bool
     */
    public function run(OfsUpdateDto $dto): bool
    {              
        $result = Ofs::find($dto->id) 
            ->increment('fact_all', $dto->fact_mounth)
            ->increment('kassa_all', $dto->kassa_mounth);
        
        return $result == true ? true : false;
    }
}

