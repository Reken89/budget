<?php

namespace App\Structure\DeloSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\DeloSection\User\Dto\DeloDocAddDto;
use App\Structure\DeloSection\User\Tasks\DeloDocAddTask;

class DeloAddAction extends BaseAction
{
    /**
     * Добавляем запись в таблицу documents
     *
     * @param DeloDocAddDto $dto
     * @return bool
     */
    public function DocAdd(DeloDocAddDto $dto): bool
    {   
        return $this->task(DeloDocAddTask::class)->CreateDoc($dto);
    }
}

