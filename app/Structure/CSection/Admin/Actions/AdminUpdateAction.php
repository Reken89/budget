<?php

namespace App\Structure\CSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\CSection\Admin\Dto\AdminUpdateDto;
use App\Structure\CSection\Admin\Tasks\AdminUpdateTask;
use App\Structure\CSection\Admin\Tasks\AdminSelectTask;

class AdminUpdateAction extends BaseAction
{
    /**
     * Обновляем значения
     *
     * @param AdminUpdateDto $dto
     * @return 
     */
    public function UpdateInfo(AdminUpdateDto $dto)
    {   
        if($dto->variant == "1"){
            $this->task(AdminUpdateTask::class)->UpdateTable1($dto);
            $main = $this->task(AdminSelectTask::class)->SelectMain($dto);
            $this->task(AdminUpdateTask::class)->UpdateMainTable1($dto, $main);
            $shared = $this->task(AdminSelectTask::class)->SelectSharedTable1($dto);
            $this->task(AdminUpdateTask::class)->UpdateSharedTable1($dto, $shared);
        }
    }
}