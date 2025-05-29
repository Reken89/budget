<?php

namespace App\Structure\UtilitiesSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\UtilitiesSection\User\Dto\StatusDto;
use App\Structure\UtilitiesSection\User\Tasks\SelectCommunalsTask;
use App\Structure\UtilitiesSection\User\Tasks\SelectTarrifsTask;
use App\Structure\UtilitiesSection\User\Tasks\StatusTask;
use App\Structure\UtilitiesSection\User\Tasks\EmailTask;

class StatusAction extends BaseAction
{    
    private string $address = "portal@kostamail.ru";
    private string $topic1 = "Запрос на редактирование";
    
    /**
     * Выполняем проверку на правильность информации
     * Сверяем значения с диапозоном тарифов
     *
     * @param StatusDto $dto, array $name
     * @return 
     */
    public function ExaminStatus(StatusDto $dto, array $name)
    {   
        $communals = $this->task(SelectCommunalsTask::class)->SelectLine($dto->id);
        $tarrifs = $this->task(SelectTarrifsTask::class)->SelectTarrifs($communals['year'], $communals['mounth']);
        for($i = 0; $i < 6; $i++){
            $volume = "$name[$i]-volume";
            $sum = "$name[$i]-sum";
            $result = $this->task(StatusTask::class)->ExaminStatus($communals[$volume], $communals[$sum], $tarrifs[$i]['tarrif_min'], $tarrifs[$i]['tarrif_max']);
            if($result == false){
                return false;
            }           
        }
        return true;       
    }
    
    /**
     * Отправляем уведомление в ФЭУ
     *
     * @param StatusDto $dto
     * @return 
     */
    public function SendMail(StatusDto $dto, array $mounth)
    {
        $communals = $this->task(SelectCommunalsTask::class)->SelectLine($dto->id);
        $info = [
            'name'        => $communals['user']['name'],
            'mounth'      => $communals['mounth'],
            'year'        => $communals['year'],
            'mounth_name' => $mounth,    
        ];
        $this->task(EmailTask::class)->SendMail($this->address, $this->topic1, $info);      
    }
    
}
