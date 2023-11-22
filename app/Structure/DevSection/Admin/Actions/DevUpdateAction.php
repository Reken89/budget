<?php

namespace App\Structure\DevSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\DevSection\Admin\Tasks\DevUpdateTask;
use App\Structure\DevSection\Admin\Dto\DevChangeDto;

class DevUpdateAction extends BaseAction
{
    /**
     * Обновляет значения таблицы communals по id
     *
     * @param string $id
     * @return bool
     */
    public function status_editor(string $id): bool
    {   
        $result = $this->task(DevUpdateTask::class)->status($id, 3);        
        return $result == true ? true : false;        
    }
    
    /**
     * Обновляет значения таблицы communals по id
     *
     * @param DevChangeDto $dto
     * @return
     */
    public function change(DevChangeDto $dto): bool
    {         
        $result = $this->task(DevUpdateTask::class)->change($dto);
        return $result == true ? true : false;        
    }
}

