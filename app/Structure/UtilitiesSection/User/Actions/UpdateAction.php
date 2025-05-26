<?php

namespace App\Structure\UtilitiesSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\UtilitiesSection\User\Dto\UpdateDto;
use App\Structure\UtilitiesSection\User\Tasks\UpdateCommunalsTask;

class UpdateAction extends BaseAction
{
    /**
     * Обновляем значения в таблице communals
     *
     * @param UpdateDto $dto
     * @return bool
     */
    public function UpdateCommunals(UpdateDto $dto): bool
    {   
        return $this->task(UpdateCommunalsTask::class)->UpdateCommunals($dto);
    }
    
    /**
     * Обновляем статус в строке
     *
     * @param int $id, int $status
     * @return bool
     */
    public function UpdateStatus(int $id, int $status): bool
    {   
        return $this->task(UpdateCommunalsTask::class)->UpdateStatus($id, $status);
    }
}
