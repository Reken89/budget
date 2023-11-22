<?php

namespace App\Structure\DevSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\DevSection\Admin\Tasks\DevUpdateTask;
use App\Structure\DevSection\Admin\Tasks\DevExaminTask;
use App\Structure\DevSection\Admin\Dto\DevChangeDto;
use App\Structure\DevSection\Admin\Dto\DevSendingDto;

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
    
    /**
     * Обновляет значения таблицы communals по id
     * Выполняет проверку введенных данных
     *
     * @param DevSendingDto $dto
     * @return
     */
    public function status_send(DevSendingDto $dto)
    {      
        $examin = $this->task(DevExaminTask::class)->run($dto);

        if ($examin['status'] == "NO") {
	    return $examin;
	} else {
            $this->task(DevUpdateTask::class)->status($dto->id, 1); 
            return $examin;
        }       
    }
}

