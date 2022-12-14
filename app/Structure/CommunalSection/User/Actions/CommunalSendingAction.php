<?php

namespace App\Structure\CommunalSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\CommunalSection\User\Tasks\CommunalExaminationTask;
use App\Structure\CommunalSection\User\Tasks\CommunalSendingTask;
use App\Structure\CommunalSection\User\Dto\CommunalSendingDto;

class CommunalSendingAction extends BaseAction
{
    /**
     * Выполняем проверку на правильность введенных цифр
     * Меняем статус строки (на отправленно) в таблице communals
     *
     * @param CommunalSendingDto $dto
     * @return bool
     */
    public function run(CommunalSendingDto $dto): bool
    {
        //$result = $this->task(CommunalExaminationTask::class)->run($dto);
        if (!$this->task(CommunalExaminationTask::class)->run($dto)) {
	    return false;
	} else {
            $this->task(CommunalSendingTask::class)->run($dto);
            return true;
        }
           
    }
}



