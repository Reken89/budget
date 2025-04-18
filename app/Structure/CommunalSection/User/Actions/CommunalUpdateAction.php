<?php

namespace App\Structure\CommunalSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\CommunalSection\User\Tasks\CommunalUpdateTask;
use App\Structure\CommunalSection\User\Tasks\CommunalExaminTask;
use App\Structure\CommunalSection\User\Tasks\CommunalEmailTask;
use App\Structure\CommunalSection\User\Tasks\PointsTask;
use App\Structure\CommunalSection\User\Dto\CommunalChangeDto;
use App\Structure\CommunalSection\User\Dto\CommunalSendingDto;

class CommunalUpdateAction extends BaseAction
{
    /**
     * Обновляет значения таблицы communals по id
     *
     * @param string $id, int $mounth
     * @return bool
     */
    public function status_editor(string $id, int $mounth): bool
    {   
        $date = date("d");
        if ($date < 18 && ltrim(date('m'),'0') - 1 == $mounth){
            $status = 2;
        }else{
            $status = 3;
            $this->task(CommunalEmailTask::class)->sendEmail($id); 
        }
        $result = $this->task(CommunalUpdateTask::class)->status($id, $status);  
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
            $info = $this->task(PointsTask::class)->SelectInfo();
            if(date("d") < 18 && date("m") !== $info["mounth"]){
                $this->task(PointsTask::class)->UpdateInfo();
            }
            
            $this->task(CommunalUpdateTask::class)->status($dto->id, 1); 
            return $examin;
        }       
    }
}