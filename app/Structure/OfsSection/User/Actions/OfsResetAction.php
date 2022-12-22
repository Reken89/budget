<?php

namespace App\Structure\OfsSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\OfsSection\User\Dto\OfsResetDto;
use App\Structure\OfsSection\User\Tasks\OfsSelectFormerTask;
use App\Structure\OfsSection\User\Tasks\OfsResetTask;

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
        
        return true;
        
    }
}

