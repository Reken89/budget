<?php

namespace App\Structure\OfsSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\OfsSection\User\Dto\OfsUpdateDto;
use App\Structure\OfsSection\User\Tasks\OfsUpdateTask;


class OfsUpdateAction extends BaseAction
{
    /**
     * Обновляет значения в таблице ofs по id
     *
     * @param OfsUpdateDto $dto
     * @return array
     */
    public function run(OfsUpdateDto $dto)
    {   
        $update = $this->task(OfsUpdateTask::class)->run($dto);
          
        return $update;

    }
}

