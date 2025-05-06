<?php

namespace App\Structure\UtilitiesSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\UtilitiesSection\Admin\Dto\IndexDto;
use App\Structure\UtilitiesSection\Admin\Tasks\SelectPointsTask;

class IndexAction extends BaseAction
{
    /**
     * Получаем информацию
     * по заданным параметрам
     *
     * @param IndexDto $dto
     * @return array
     */
    public function SelectInfo(IndexDto $dto): array
    {           
        $info = [
            'points' => $this->task(SelectPointsTask::class)->SelectPoints(),
        ];
        return $info;
    }
    
    
}

