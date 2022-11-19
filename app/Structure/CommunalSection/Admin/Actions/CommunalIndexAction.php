<?php

namespace App\Structure\CommunalSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\CommunalSection\Admin\Dto\CommunalIndexDto;
use App\Structure\CommunalSection\Admin\Tasks\CommunalSelectTask;
use App\Structure\CommunalSection\Admin\Tasks\CommunalSelectAllTask;

class CommunalIndexAction extends BaseAction
{
    /**
     * Возвращает коммунальные услуги за выбранный год и месяц
     * Возвращает ИТОГИ коммунальных услуг
     * Возвращает тарифы
     *
     * @param CommunalIndexDto $dto
     * @return array
     */
    public function run(CommunalIndexDto $dto): array
    {   
        if (count($dto->year) == '1' AND count($dto->mounth) == '1'){
            $result = $this->task(CommunalSelectTask::class)->run($dto);
        } else {
            $result = $this->task(CommunalSelectAllTask::class)->run($dto);  
        }
        
        $info = [
            "result"  => $result,
        ];
        
        return $info;

    }
}

