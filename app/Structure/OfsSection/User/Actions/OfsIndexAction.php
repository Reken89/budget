<?php

namespace App\Structure\OfsSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\OfsSection\User\Dto\OfsIndexDto;
use App\Structure\OfsSection\User\Tasks\OfsSelectAllTask;
use App\Structure\OfsSection\User\Tasks\OfsNumberMaxTask;

class OfsIndexAction extends BaseAction
{
    /**
     * Возвращает ОФС по заданным параметрам
     * Возвращает ИТОГИ ОФС
     *
     * @param OfsIndexDto $dto
     * @return array
     */
    public function run(OfsIndexDto $dto): array
    {   
        $result = $this->task(OfsSelectAllTask::class)->run($dto);
        $number = $this->task(OfsNumberMaxTask::class)->run();
  
        $info = [
            'info'   => 'yes',
            'result' => $result,
            'number' => $number,
        ];
        
        return $info;

    }
}

