<?php

namespace App\Structure\CSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\CSection\Admin\Dto\AdminSelectDto;
use App\Structure\CSection\Admin\Tasks\AdminSelectTask;

class AdminSelectAction extends BaseAction
{
    /**
     * Возвращаем таблицу
     *
     * @param AdminSelectDto $dto
     * @return array
     */
    public function SelectInfo(AdminSelectDto $dto): array
    {   
        $result = $this->task(AdminSelectTask::class)->SelectAll($dto);

        return $result;

    }
}





