<?php

namespace App\Structure\Count24Section\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Count24Section\Admin\Dto\Count24UpdateDto;
use App\Structure\Count24Section\Admin\Tasks\Count24UpdateTask;

class Count24UpdateAction extends BaseAction
{
    /**
     * Обновляем значение в таблице counts24 по id
     *
     * @param Count24UpdateDto $dto
     * @return
     */
    public function UpdateInfo(Count24UpdateDto $dto)
    {   
        $this->task(Count24UpdateTask::class)->UpdateLine($dto);        
    }
}
