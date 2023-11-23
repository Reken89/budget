<?php

namespace App\Structure\CommunalSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\CommunalSection\User\Tasks\CommunalUpdateTask;
use App\Structure\CommunalSection\User\Tasks\CommunalExaminTask;
use App\Structure\CommunalSection\User\Dto\CommunalChangeDto;
use App\Structure\CommunalSection\User\Dto\CommunalSendingDto;

class CommunalUpdateAction extends BaseAction
{
    /**
     * Обновляет значения таблицы communals по id
     *
     * @param string $id
     * @return bool
     */
    public function status_editor(string $id): bool
    {   
        $result = $this->task(CommunalUpdateTask::class)->status($id, 3);        
        return $result == true ? true : false;        
    }
    
    /**
     * Обновляет значения таблицы communals по id
     *
     * @param CommunalChangeDto $dto
     * @return
     */
    public function change(CommunalChangeDto $dto): bool
    {         
        $result = $this->task(CommunalUpdateTask::class)->change($dto);
        return $result == true ? true : false;        
    }
    
    /**
     * Обновляет значения таблицы communals по id
     * Выполняет проверку введенных данных
     *
     * @param CommunalSendingDto $dto
     * @return
     */
    public function status_send(CommunalSendingDto $dto)
    {      
        $examin = $this->task(CommunalExaminTask::class)->run($dto);

        if ($examin['status'] == "NO") {
	    return $examin;
	} else {
            $this->task(CommunalUpdateTask::class)->status($dto->id, 1); 
            return $examin;
        }       
    }
}