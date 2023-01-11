<?php

namespace App\Structure\OfsSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\OfsSection\Admin\Dto\OfsIndexDto;
use App\Structure\OfsSection\Admin\Tasks\OfsSelectAllTask;

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
        if (count($dto->year) == '1' AND count($dto->mounth) == '1'){
            $variant = "one";
        } else {
            $result = $this->task(OfsSelectAllTask::class)->run($dto);
            $variant = "many";
        }

    }
}

