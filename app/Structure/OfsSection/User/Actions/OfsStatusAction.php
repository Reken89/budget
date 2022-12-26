<?php

namespace App\Structure\OfsSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\OfsSection\User\Dto\OfsStatusDto;
use App\Structure\OfsSection\User\Tasks\OfsExaminationTask;

class OfsStatusAction extends BaseAction
{
    /**
     * Меняем статус строк в таблице ofs
     *
     * @param OfsStatusDto $dto
     * @return array
     */
    public function run(OfsStatusDto $dto): bool
    {   
        $examination = $this->task(OfsExaminationTask::class)->run($dto);
        
        if($examination['total1'] == '0' && $examination['total2'] >= '0'){
            return true;
        } else {
            return false;
        }

    }
}

